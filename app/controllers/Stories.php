<?php
class Stories extends Base
{
    public function __construct()
    {
        parent::__construct();

    }
    
    //////////// SHOW ALL (RESUMES)
    public function index()
    {
        $posts = $this->postModel->getPosts();
        $categories = $this->postModel->getCategories();
        $galleries = $this->imageModel->getGalleryCategories();

        $data =
            [
                'title' => 'Latest stories',
                'posts' => $posts,
                'categories' => $categories,
                'galleries' => $galleries,
                'siteName' => $this->site->site_name,
                'siteDesc' => 'A storytelling and collection about my life as a traveler from my point of view',
                'siteWelcome' => $this->site->site_welcome,
                'siteImg' => $this->site->site_logo,
                'creator' => $this->site->site_contact_name,
                'ogImg' => '/all_img/img/share-stories.jpg',
            ];

        $this->standardHeader($data);
        $this->standardNav();
        $this->view('stories/index', $data);
        $this->standardFooter();
    }


    //////////// SHOW BY ID (RESUME)
    public function byCategory($id = '')
    {
        // Collecting all our info from all our tables for the show view
        //$post = $this->postModel->getPostById($id);
        $postByCat = $this->postModel->getPostsByCategory($id);
        // No ID redirect
        if (empty($id)) {
            redirect('stories/byCategory');
        }
        $data =
            [
                'postByCat' => $postByCat,
                'title' => $postByCat->ps_cat_name . " | " . $postByCat->ps_cat_desc . " | Stories | " . SITENAME,
                'siteName' => $this->site->site_name,
                'siteImg' => $this->site->site_logo,
                'creator' => $this->site->site_contact_name,
                'ogImg' =>  '/catImg/' . $postByCat->ps_cat_img,

            ];


        $this->standardHeader($data);
        $this->standardNav();
        $this->view('stories/byCategory', $data);
        $this->standardFooter();
    }




    //////////// SHOW BY ID (RESUME)
    public function show($id = '')
    {
        // Collecting all our info from all our tables for the show view
        $post = $this->postModel->getPostById($id);
        // No ID redirect
        if (empty($id)) {
            redirect('stories/index');
        }
        $data =
            [
                'post' => $post,
                'title' => $post->ps_title . " | " . $post->ps_sub_title . " | Stories | " . SITENAME,
                'siteName' => $this->site->site_name,
                'siteImg' => $this->site->site_logo,
                'creator' => $this->site->site_contact_name,
                'ogImg' =>  '/storyImg/' . $post->ps_img,

            ];


        $this->standardHeader($data);
        $this->standardNav();
        $this->view('stories/show', $data);
        $this->standardFooter();
    }




///// DELETE FUNCTIONS ////////////////////////////////////////////////////////



}