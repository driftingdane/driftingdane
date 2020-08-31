<?php
class Videos extends Base
{

    public function __construct()
    {
        parent::__construct();

    }


    ////// Video gallery

    public function index()
    {
        $categories = $this->videoModel->getVideoCategories();

        $data =
            [
                'title' => 'Video categories',
                'categories' => $categories,
                'siteName' => $this->site->site_name,
                'siteDesc' => 'A small collection of travel videos from around the world',
                'siteWelcome' => $this->site->site_welcome,
                'siteImg' => $this->site->site_logo,
                'creator' => $this->site->site_contact_name,
                'ogImg' =>  '/all_img/img/share-videos.jpg',
            ];


        $this->standardHeader($data);
        $this->standardNav();
        $this->view('videos/index', $data);
        $this->standardFooter();
    }


    public function show($id) {

        $videos = $this->videoModel->getVideosByCategory($id);
        $lastPart = basename($_GET['url']);
        $cat_title = cleanerUrlTitle(ucwords($lastPart));
        $data =
            [
                'videos' => $videos,
                'title' => "Videos" . " | " . $cat_title,
                'title_page' => $cat_title,
                'siteName' => $this->site->site_name,
                'siteDesc' => "Video highlights from " . $cat_title,
                'siteImg' => $this->site->site_logo,
                'creator' => $this->site->site_contact_name,
                'ogImg' => '/catImg/share-img/' . strtolower($cat_title). ".jpg",
            ];

        $this->standardHeader($data);
        $this->standardNav();
        $this->view('videos/show', $data);
        $this->standardFooter();
    }


}