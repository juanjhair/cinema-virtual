<?php 
    
    namespace App\Controller\Room;
    
    use System\Core\Controller;
    use App\Model\Room\RoomDAO;
    use App\Model\Session\Session;

    class RoomController extends Controller{

        

        public function __construct(){
            $session=new Session();
            $session->init();
        }
        public function index(){
            $this->render(__CLASS__,'Room');
        }
        public function insert($request){

            $json_request=$request['json_data'];
            
            $request=json_decode($json_request,true); // convert array assoc
            
            $roomDAO=new roomDAO();

            $room=$roomDAO->register($request,$_SESSION['code']); // ARRAY ROOMS OBJECTS
            
            if($room!=false){
                echo json_encode(array("message"=>"Successful registration","data"=>array())); 
            }else{
             echo json_encode(array("message"=>"An error occurred, try again please","data"=>null)); 
            }
        }
        public function show(){
             
            $roomDAO=new roomDAO();
            
            $this->render(__CLASS__,"Show",$roomDAO->show());

        }
        public function edit(){
            $roomDAO=new roomDAO();
            $roomDAO->edit();
        }
    }
    

?>