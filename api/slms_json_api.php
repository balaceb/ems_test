<?php

    require_once ('../lib/Database.php');
    require_once ('../classes/Json.php');
    
    
    $msg = 'INVALID REQUEST!!';
    
    
    if( ($_SERVER['REQUEST_METHOD'] == 'GET') && (isset($_GET['action'])) )
    {
        
        $action = $_GET['action'];
               
        switch ($action)
        {
                
            case 'get_active_enrolled_learner_list':
                $json = new JsonApi();
                echo $json->getJsonActiveEnrolledLearners() ;
                break;
                
            case 'get_facilitator_not_accepted_learner_list':
                $json = new JsonApi();
                echo $json->getJsonFacilitatorNotAcceptedStrategy();
                break;
                
            case 'get_assessor_not_media_interview_list':
                $json = new JsonApi();
                echo $json->getJsonAssessorNotMediaInterview();
                break;
                
            case 'timetable':
                $json = new JsonApi();
                echo $json->getJsonCalendarEvents();
                break;
                
            case "learner_info":
                $json = new JsonApi();
                $email = $_GET['email'];
                echo $json->getLearnerInfoByEmail($email);
                break;
                
            case 'learner_docs':
                $json = new JsonApi();
                $email = $_GET['email'];
                echo $json->getJsonAllLearnerDocs($email);
                break;
                
            // used by the mobile app to verify the login details of a first time user on the app
            case "check_login":
                $usr = new User();
                $email = $_GET['email'];
                $pwd = $_GET['pwd'];
                
                echo $usr->userCheckVerifyLogin($email, $pwd);
                
                break;
                
            case 'other':
            default:
                echo $msg;
                break;
        }
    }

?>