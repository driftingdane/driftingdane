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
                'siteDesc' => 'A storytelling collection about my life as a traveler from my point of view',
                'siteWelcome' => $this->site->site_welcome,
                'siteImg' => $this->site->site_logo,
                'creator' => $this->site->site_contact_name,
                'ogImg' => '/all_img/img/share-stories.jpg',
            ];

        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            // Send a token for validating user later by email
            $hash = bin2hex(random_bytes(32));

        $data =
            [
                'hash' => $hash,
                'subEmail_err' => ''
            ];

            if(empty($data['email'])) {
                $data['subEmail_err'] = "Please add a valid email";
            }

            if(empty($data['subEmail_err'])) {

                if($this->adminModel->saveEmail($data)) {
                    flash('success', 'Success! Thanks for subscribing');
                    $this->subscribe_greeting($data);
                    redirect('stories/index');
                    exit();

                } else {
                    echo "Something went wrong.";
                }

            } else {
                // Show errors
                $this->standardHeader($data);
                $this->view('stories/index', $data);
            }
        }
        $this->standardHeader($data);
        $this->standardNav();
        $this->view('stories/index', $data);
        $this->standardFooter();
    }

    //////////// SHOW BY ID (RESUME)
    public function show($id = '')
    {
        // Collecting all our info from all our tables for the show view
        $post = $this->postModel->getPostById($id);
        // No ID redirect
        if (empty($id)) {
            redirect('Stories');
        }
        $data =
            [
                'post' => $post,
                'title' => $post->ps_title . ' | ' . $post->ps_sub_title . ' | Stories',
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

    public function deletePost($id)
    {
        if (!isLoggedIn()) {
            flash('resume_message', 'You need to login or register');
            redirect('users/login');
        }

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $returnUrl = $_POST['returnUrl'];
            // Get existing resume from model
            $resume = $this->resumeModel->getResumeById($id);
            // Check for ownership
            if ($resume->user_id != $_SESSION['user_id']) {
                redirect('Posts');
            }
            if ($this->resumeModel->delExp($id)) {
                flash('resume_message', 'Experience deleted');
                redirect('clients/addExperience/' . $returnUrl);

            } else {
                exit('Something went wrong');
            }

        } else {
            redirect('Posts');
        }
    }


}