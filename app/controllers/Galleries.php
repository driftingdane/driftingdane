<?php
class Galleries extends Base
{
    public function __construct()
    {
        parent::__construct();

    }


    ////// Image gallery
    public function index()
    {
        $categories = $this->imageModel->getGalleryCategories();

        $data =
            [
                'galleries' => $categories,
                'flex' => $this->flex,
                'title' => 'Galleries',
                'siteName' => $this->site->site_name,
                'siteDesc' => 'A collection of my favourite memories from all corners of the world',
                'siteWelcome' => $this->site->site_welcome,
                'siteImg' => $this->site->site_logo,
                'creator' => $this->site->site_contact_name,
                'ogImg' => '/all_img/img/share-galleries.jpg',
            ];

        $this->standardHeader($data);
        $this->standardNav();
        $this->view('galleries/index', $data);
        $this->standardFooter();
    }


    public function show($id) {

        $images = $this->imageModel->getGalleryImages($id);
        $lastPart = basename($_GET['url']);
        $cat_title = cleanerUrlTitle(ucwords($lastPart));

                $data =
                    [
                        'images' => $images,
                        'title' =>  "Galleries" . " | " . $cat_title,
                        'page_title' =>  $cat_title,
                        'siteName' => $this->site->site_name,
                        'siteDesc' => $images->gl_desc,
                        'siteImg' => $this->site->site_logo,
                        'creator' => $this->site->site_contact_name,
                        'ogImg' => '/catImg/share-img/' . strtolower(str_replace(" ", "-", $cat_title)). ".jpg",
                    ];

        $this->standardHeader($data);
        $this->standardNav();
        $this->view('galleries/show', $data);
        $this->standardFooter();
    }


}