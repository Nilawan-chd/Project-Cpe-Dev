<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MX_Controller
{

    public function __construct()
    {
        parent::__construct();

        /*
        | -------------------------------------------------------------------------
        | SET UTILITIES
        | -------------------------------------------------------------------------
        */

        // Model
        $this->load->model('Category_news_model');
        $this->load->model('News_model');
        $this->load->model('Faq_news_model');
        $this->load->model('Contact_page_model');
    }

    public function index()
    {
        /*
        | -------------------------------------------------------------------------
        | HANDLE
        | -------------------------------------------------------------------------
        */

        $news_id = 1;
        $page_content = $this->News_model->get_news_video_by_id($news_id);

        /*
        | -------------------------------------------------------------------------
        | SET DATA
        | -------------------------------------------------------------------------
        */

        // Title Page
        $data['title'] = $page_content->meta_tag_title;

        // Meta Tag
        $data['meta']['title'] = $page_content->meta_tag_title;
        $data['meta']['description'] = $page_content->meta_tag_description;
        $data['meta']['keyword'] = $page_content->meta_tag_keywords;

        // OG & Twitter
        $data['og_twitter']['title'] = $page_content->meta_tag_title;
        $data['og_twitter']['description'] = $page_content->meta_tag_description;
        $data['og_twitter']['image'] = base_url('storage/uploads/images/technologies/'. $page_content->img_og_twitter);

        // Content
        $data['content'] = 'news';

        // Utilities
        $data['category_news'] = $this->filter_data_products($this->Category_news_model->get_category_news_all());
        $data['news_specific'] = $this->News_model->get_news_video_by_id(1);
        $data['news_specific_category_slug'] = $data['news_specific']->category_news_slug;
        $data['contact_info'] = $this->Contact_page_model->get_contact_pages_by_id(1);

        /*
        | -------------------------------------------------------------------------
        | EXECUTE VIEWS
        | -------------------------------------------------------------------------
        */

        $this->load->view('app', $data);
    }

    public function show($category_news_slug, $news_slug, $news_id)
    {
        /*
        | -------------------------------------------------------------------------
        | HANDLE
        | -------------------------------------------------------------------------
        */

        $news_id = hashids_decrypt($news_id);
        $page_content = $this->News_model->get_news_video_by_id($news_id);

        /*
        | -------------------------------------------------------------------------
        | SET DATA
        | -------------------------------------------------------------------------
        */

        // Title Page
        $data['title'] = $page_content->meta_tag_title;


        // Content
        $data['content'] = 'news';

        // Utilities
        $data['category_news'] = $this->filter_data_products($this->Category_news_model->get_category_news_all());
        $data['news_specific'] = $this->News_model->get_news_video_by_id($news_id);
        $data['news_specific_category_slug'] = $data['news_specific']->category_news_slug;
        $data['contact_info'] = $this->Contact_page_model->get_contact_pages_by_id(1);

        /*
        | -------------------------------------------------------------------------
        | EXECUTE VIEWS
        | -------------------------------------------------------------------------
        */

        $this->load->view('app', $data);
    }

    public function show_faq($slug, $category_news_id)
    {
        /*
        | -------------------------------------------------------------------------
        | HANDLE
        | -------------------------------------------------------------------------
        */

        $category_news_id = hashids_decrypt($category_news_id);
        $page_content = $this->Category_news_model->get_category_news_by_id($category_news_id);

        /*
        | -------------------------------------------------------------------------
        | SET DATA
        | -------------------------------------------------------------------------
        */

        // Title Page
        $data['title'] = $page_content->meta_tag_title;

        // Meta Tag
        $data['meta']['title'] = $page_content->meta_tag_title;
        $data['meta']['description'] = $page_content->meta_tag_description;
        $data['meta']['keyword'] = $page_content->meta_tag_keywords;

        // OG & Twitter
        $data['og_twitter']['title'] = $page_content->meta_tag_title;
        $data['og_twitter']['description'] = $page_content->meta_tag_description;
        $data['og_twitter']['image'] = base_url('storage/uploads/images/technologies/'. $page_content->img_og_twitter);

        // Content
        $data['content'] = 'news';

        // Utilities
        $data['category_news'] = $this->filter_data_products($this->Category_news_model->get_category_news_all());
        $data['contact_info'] = $this->Contact_page_model->get_contact_pages_by_id(1);

        switch (rawurldecode($slug)) {
            case 'faq-คำถามที่พบบอย':

                $category_news = $this->Category_news_model->get_category_news_by_id($category_news_id);

                $data['news_specific']['faqs'] = $this->Faq_news_model->get_faq_news_by_category_news_id($category_news_id);
                $data['news_specific']['category_news_name'] = $category_news->title;
                $data['news_specific_category_slug'] = $category_news->slug;
                break;

            default:
                $data['news_specific'] = $this->News_model->get_news_video_by_category_news_id($category_news_id);
                $data['news_specific_category_slug'] = $data['news_specific']->category_news_slug;;
        }

        /*
        | -------------------------------------------------------------------------
        | EXECUTE VIEWS
        | -------------------------------------------------------------------------
        */

        $this->load->view('app', $data);
    }

    private function filter_data_products($category_news)
    {
        $data = [];

        foreach ($category_news as $key_category_news => $category_news) {

            /** CASE LIST **/
            $CASE_VEDIO = 1;
            $CASE_TIPS = 2;
            $CASE_FAQ = 3;
            $CASE_OTHER = 0;

            if ($category_news->id != $CASE_FAQ) {
                $technologies = $this->News_model->get_news_video_by_category_news_id($category_news->id);
            } else {
                $technologies = $this->Faq_news_model->get_faq_news_by_category_news_id($category_news->id);
            }

            $data[$key_category_news]['category_news_id'] = $category_news->id;
            $data[$key_category_news]['category_news_name'] = $category_news->title;
            $data[$key_category_news]['category_news_slug'] = $category_news->slug;
            $data[$key_category_news]['technologies'] = [];

            if (count($technologies) > 0) {
                foreach ($technologies as $key_news => $news) {
                    $data[$key_category_news]['technologies'][$key_news] = $news;
                }
            }
        }

        return $data;
    }
}
