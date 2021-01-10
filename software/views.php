<?php
session_start();

?>
<?php
    $conn=mysqli_connect("localhost","root","11235813",'deneme');
    function createCommentRow($data){
        global $conn;

        $response = '
            <div class="comment">
                <div class="user">'.$data['u_name'].' <span class="time">'.$data['createdOn'].'</span></div>
                <div class="userComment">'.$data['comment'].'</div>
                <div class="reply"><a href="javascript:void(0)" data-commentID="'.$data['id'].'" onclick="reply(this)">REPLY</a></div>
                <div class="replies">';
        
        
        $sql = $conn->query("SELECT rep.id, comment, u_name, createdOn FROM rep WHERE commentID = '".$data['id']."' ORDER BY rep.id");
        while($dataR = $sql->fetch_assoc())
            $response .= createCommentRow($dataR);

        $response .= '
                        </div>
            </div>
        ';

        return $response;
    }

    if (isset($_POST['getAllComments'])) {
        $start = $conn->real_escape_string($_POST['start']);
        $response = "";
        $dID = $conn->real_escape_string($_POST['dID']);
        $dName = $conn->real_escape_string($_POST['dName']);
        $sql = $conn->query("SELECT comments.id, comment, u_name, createdOn FROM comments WHERE docId = '$dID' AND depName = '$dName' ORDER BY comments.id DESC LIMIT $start,20");
        while($data = $sql->fetch_assoc())
            $response .= createCommentRow($data);

        exit($response);

    }
    if (isset($_POST['addComment'])) {
        $docId = $conn->real_escape_string($_POST['docId']);
        $depName = $conn->real_escape_string($_POST['depName']);
        $uID = $conn->real_escape_string($_POST['uID']);
        $uID =$_SESSION['username'];
        $comment = $conn->real_escape_string($_POST['comment']);
        $isReply = $conn->real_escape_string($_POST['isReply']);
        $commentID = $conn->real_escape_string($_POST['commentID']);

        if($isReply != 'false'){
            $conn->query("INSERT INTO rep (commentID, comment, createdOn, u_name) VALUES ('$commentID','$comment',NOW(), '$uID')");
            $sql = $conn->query("SELECT rep.id, comment, u_name, createdOn FROM rep ORDER BY rep.id DESC LIMIT 1");
        } else {
            $conn->query("INSERT INTO comments (u_name, comment, createdOn, depName, docId) VALUES ('$uID','$comment',NOW(), '$depName', '$docId')");
            $sql = $conn->query("SELECT comments.id, comment, u_name, createdOn FROM comments WHERE docId = '$docId' AND depName = '$depName' ORDER BY comments.id DESC LIMIT 1");
        }

        $data = $sql->fetch_assoc();
        exit(createCommentRow($data));
    }

    $docId = $_GET['id'];
    $depName = $_GET['name'];
    $sqlNumofRep = $conn->query("SELECT rep.id FROM rep INNER JOIN comments ON rep.commentID = comments.id WHERE docId = '$docId' AND depName = '$depName'");
    $numReplies = $sqlNumofRep->num_rows;
    $sqlNumofCom = $conn->query("SELECT id FROM comments WHERE docId = '$docId' AND depName = '$depName'");
    $numComments = $sqlNumofCom->num_rows;
    $numTotal = $numReplies + $numComments;
    
    if (isset($_POST['send'])) {
        $uID = $conn->real_escape_string($_POST['uID']);
        $ratedIndex = $conn->real_escape_string($_POST['ratedIndex']);
        $ratedIndex++;
        $dID = $conn->real_escape_string($_POST['dID']);
        $dName = $conn->real_escape_string($_POST['dName']);
        $sID = $conn->real_escape_string($_POST['sID']);
        $uID =$_SESSION['username'];

        $sql = $conn -> query("SELECT rating FROM ratings WHERE u_id='$uID'");
        $Data = $sql->fetch_assoc();
        $s = $Data['rating'];
        
        if ($s == null){
            $conn->query("INSERT INTO ratings (rating,document_id,document_name,u_id) VALUES ('$ratedIndex','$dID','$dName','$uID')");
        } else{
            $sql = $conn -> query("SELECT document_id FROM ratings WHERE document_name ='$dName' AND u_id='$uID' AND document_id = '$dID'");
            $sData = $sql->fetch_assoc();
            $sID = $sData['document_id'];
            if($dID != $sID){
                $conn->query("INSERT INTO ratings (rating,document_id,document_name,u_id) VALUES ('$ratedIndex','$dID','$dName','$uID')");
            } else{
                $conn->query("UPDATE ratings SET rating='$ratedIndex' WHERE u_id='$uID' AND document_id='$dID' AND document_name='$dName'");
            }
        }
        exit(json_encode(array('u_id' => $uID,'document_id' => $dID,'document_name' => $dName,'document_id' => $sID)));
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rating</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="port.css">
    <link rel="stylesheet" href="navbarstyle.css">
    <style type="text/css">
        .comment{
            margin-bottom: 20px;
        }
        .user {
            font-weight: bold;
            color: black;
        }

        .time, .reply {
            color: gray;
        }

        .userComment {
            color: #000;
        }

        .replies .comment {
            margin-top: 20px;

        }

        .replies {
            margin-left: 20px;
        }
        .arkaplan{
            margin: auto;
            margin-top: 3%;
            width: 80%;
            padding: 20px;
            border: :10px solid red;
            border-radius: 50px;
            box-shadow: 0px 0px 10px 2px grey;
            background-color:  rgb(255, 255, 255, 0.7);

}
    </style>
      <script>
            function random_function()
            {    
                var a=document.getElementById("bolumid").value;
                var b=document.getElementById("seneid").value;
                if(a==="ceng")
                {switch (b) {
        case "1" :
           var arr=["MAT805 Calculus I","KIM113 General Chemistry","FIZ105  Physics I","FIZ107  Physics Laboratory I","BIM101   Computer Programming I","TUR125 Turkish Language I","MAT806 Calculus II",
"FIZ106 Physics II",
"FIZ108 Physics Laboratory II",
"BIM122 Discrete Computational Structures",
"BIM102 Computer Programming II",
"TUR126 Turkish Language II"
];
            break;

        case "2" :
            var arr=["BIM207    Computer Programming III",
"BIM213 Data Structures and Algorithms",
"BIM203 Logic Design",
"BIM209 Principles Software Design and Development",
"MAT249 Linear Algebra and Differential Equations",
"TAR165 Atatürk's Principles and History of Turkish Revolution I",
"BIM204 Numeric Analysis for Computer Engineers",
"BIM222 Internet Programming",
"BIM314 Theory of Computation",
"BIM208 Computer Programming IV",
"BIM312 Database Management Systems",
"IST252 Probability and Statistics",
"TAR166 Atatürk's Principles and History of Turkish Revolution II"
];
            break;

        case "3" :
            var arr=["BIM311    Systems Analysis and Design",
"BIM313 Advanced Programming Techniques",
"BIM303 Microcomputers",
"BIM305 Computer Organization",
"BIM304 Computer Algorithm Design",
"BIM306 Operating Systems",
"BIM308 Web Server Programming",
"BIM302 Computer Networks"
];
            break;

        case "4":
           var arr=["BIM437 Computer Engineering Design",
"BIM444 Computer Engineering Applications",
"BIM309 Artificial Intelligence",
"BIM405 Project Management",
"BIM423 Software Engineering",
"BIM446 Analysis of Algorithms",
"BIM448 Computer Graphics",
"BIM450 Network Management",
"BIM452 Multimedia Computing",
"BIM454 Programming Language Concepts",
"BIM456 Network Security Principles",
"BIM458 Simulation and Modelling",
"BIM460 Software Modelling",
"BIM462 Parallel Systems",
"BIM464 Human-Computer Interaction",
"BIM466 Fuzzy Logic"
,"BIM468    Computer Aided Design"
,"BIM439    Applications of Database Management Systems"
,"BIM470    Neural Networks"
,"BIM493    Mobile Programming I"
,"BIM494    Mobile Programming II"
,"BIM472    Image Processing"
,"BIM474    Introduction to Cryptography"
,"BIM476    Data Acquisition and Processing"
,"BIM478    Management Information Systems"
,"BIM480    Compiler Design"
,"BIM482    Network Programming"
,"BIM484    Distributed Systems"
,"BIM485    Research in Computer Science I"
,"BIM486    Research in Computer Science II"
,"BIM488    Introduction to Pattern Recognition"
,"BIM490    Introduction to Information Retrieval"
,"BIM492    Design Patterns"
,"EEM305    Signals and Systems"
,"EEM334    Digital Systems II"
,"MUH302    Interdisciplinary Applications"
,"BIM441    Introduction to Rough Sets Theory"
,"BIM496    Computer Vision"
,"BIM451    Web Server Programming with MVC"
,"BIM498    Embedded Software Design"
,"BIM453    Introduction to Machine Learning"
,"BIM457    Embedded Programming Languages"
,"BIM455    Introduction to Hardware Design"];
            break;
        }
                }
                else if(a==="eem")
                {
                    {switch (b) {
        case "1" :
           var arr=["BİM122 Discrete Computational Structures (ENG)",   
"FİZ105 Physics I (ENG) ",  
"FİZ107 Physics Laboratory I (ENG)  ",  
"KİM113 General Chemistry (ENG)",       
"MAT805 Calculus I (ENG)",
"TÜR125 Turkish Language I  ",
"EEM102 Introduction to Electrical Engineering (ENG)",  
"EEM104 Professional Aspects of Electrical & Electronics Engineering (ENG)  ",
"FİZ106 Physics II (ENG)    "   ,
"FİZ108 Physics Laboratory II (ENG) ",
"MAT251 Linear Algebra (ENG)"   ,
"MAT806 Calculus II (ENG)"

];
            break;

        case "2" :
            var arr=["BİL200    Computer Programming (ENG)" ,
"EEM209 Circuit Analysis (ENG)",
"MAT219 Differential Equations (ENG)"   ,
"MAT247 Engineering Mathematics (Mühendislik Matematiği) (ENG)" ,
"TAR165 Atatürk's Principles and History of Turkish Revolution I",  
"EEM208 Electromagnetic Fields and Waves (ENG)" ,
"EEM210 Fundamentals of Semiconductor Device (ENG)" ,
"EEM232 Digital Systems I (ENG) ",
"EEM238 Digital Systems Laboratory (ENG)    ",
"İST244 Engineering Probability (ENG)   ",
"TAR166 Atatürk's Principles and History of Turkish Revolution II"  ,
"TÜR126 Turkish Language II "

];
            break;

        case "3" :
            var arr=["EEM301    Signals and Systems (ENG)"  ,
"EEM311 Principles of Energy Conversion (ENG)",
"EEM321 Electronics I (ENG)"    ,
"EEM328 Electronics Laboratory (ENG)"   ,
"İKT151 Economics (ENG) ",
"EEM308 Introduction to Communication (ENG)",   
"EEM336 Microprocessors I (ENG)"    ,
"EEM342 Fundamentals of Control Systems (ENG)"  ,
"İŞL101 Introduction to Business (ENG)  ",

];
            break;

        case "4":
           var arr=["EEM413 Electrical and Electronics Engineering Design Project I (ENG)",
"EEM445 Design Process for Electrical and Electronics Engineers (ENG)",
"EEM414 Electrical and Electronics Engineering Design Project II (ENG)  ",
"EEM322 Electronics II (ENG)(ENG)"      ,
"EEM334 Digital Systems II (ENG)(ENG)   ",
"EEM409 Random Signals (ENG)(ENG)"  ,
"EEM447 Research in Digital Systems I (ENG)(ENG)    ",
"EEM449 Embedded System Design (ENG)(ENG)",
"EEM451 Industrial Control Systems (ENG)(ENG)   ",
"EEM453 Research in Control and System Theory I (ENG)(ENG)",
"EEM455 Research in Power Systems I (ENG)(ENG)" ,
"EEM457 Research in Signal Processing I (ENG)(ENG)  ",
"EEM459 Research in Electronics I (ENG)(ENG)",
"EEM463 Introduction to Image Processing (ENG)(ENG) ",
"EEM467 Digital Communications (ENG)(ENG)   ",
"EEM469 Communication Electronics (ENG)(ENG)",
"EEM471 Electrical Machinery I (ENG)(ENG)"  ,
"EEM473 Power Systems Analysis I (ENG)(ENG)"    ,
"EEM475 Power Electronics I (ENG)(ENG)" ,
"EEM477 Digital Signal Processing (ENG)(ENG)"   ,
"EEM483 Power Systems Analysis II (ENG)(ENG)",  
"EEM491 Linear Control Systems (ENG)(ENG)"  ,
"EEM493 Digital Control Systems (ENG)(ENG)" ,
"EEM403 Fundamentals of Optoelectronics and Nanophotonics (ENG)(ENG)",  
"EEM448 Research in Digital Systems II (ENG)(ENG)"  ,
"EEM450 Introduction to System Identification (ENG)(ENG)"   ,
"EEM452 Introduction to Robotics (ENG)(ENG) ",
"EEM454 Research in Control and System Theory II (ENG)(ENG)",   
"EEM456 Research in Power Systems II (ENG)(ENG) ",
"EEM458 Research in Signal Processing II (ENG)(ENG) ",
"EEM460 Research in Electronics II (ENG)(ENG)"  ,
"EEM461 Research in Telecommunications I (ENG)(ENG) ",
"EEM462 Research in Telecommunications II (ENG)(ENG)",
"EEM464 System-on-Chip Design (ENG)(ENG)",
"EEM466 High Voltage Techniques (ENG)(ENG)  ",
"EEM470 Microwaves and Antennas (ENG)(ENG)  ",
"EEM476 Power Electronics II (ENG)(ENG)"    ,
"EEM478 Digital Signal Processing Hardware (ENG)(ENG)"  ,
"EEM480 Algorithms and Complexity (ENG)(ENG)"   ,
"EEM482 Fundamentals of Data Networks (ENG)(ENG)"   ,
"EEM486 Computer Architecture (ENG)(ENG)"   ,
"EEM494 Control Systems Laboratory (ENG)(ENG)"  ,
"EEM496 Communications Systems Laboratory (ENG)(ENG)"
];
            break;
        }
                }   
                }
             
                var string="";
             
                for(i=0;i<arr.length;i++)
                {
                    string=string+"<option value="+arr[i]+">"+arr[i]+"</option>";
                }
                document.getElementById("dersid").innerHTML=string;
            }


            function random_function_upload()
            {    
                var a=document.getElementById("uploadbolumid").value;
                var b=document.getElementById("uploadseneid").value;
                if(a==="ceng")
                {switch (b) {
        case "1" :
           var arr=["MAT805 Calculus I","KIM113 General Chemistry","FIZ105  Physics I","FIZ107  Physics Laboratory I","BIM101   Computer Programming I","TUR125 Turkish Language I","MAT806 Calculus II",
"FIZ106 Physics II",
"FIZ108 Physics Laboratory II",
"BIM122 Discrete Computational Structures",
"BIM102 Computer Programming II",
"TUR126 Turkish Language II"
];
            break;

        case "2" :
            var arr=["BIM207    Computer Programming III",
"BIM213 Data Structures and Algorithms",
"BIM203 Logic Design",
"BIM209 Principles Software Design and Development",
"MAT249 Linear Algebra and Differential Equations",
"TAR165 Atatürk's Principles and History of Turkish Revolution I",
"BIM204 Numeric Analysis for Computer Engineers",
"BIM222 Internet Programming",
"BIM314 Theory of Computation",
"BIM208 Computer Programming IV",
"BIM312 Database Management Systems",
"IST252 Probability and Statistics",
"TAR166 Atatürk's Principles and History of Turkish Revolution II"
];
            break;

        case "3" :
            var arr=["BIM311    Systems Analysis and Design",
"BIM313 Advanced Programming Techniques",
"BIM303 Microcomputers",
"BIM305 Computer Organization",
"BIM304 Computer Algorithm Design",
"BIM306 Operating Systems",
"BIM308 Web Server Programming",
"BIM302 Computer Networks"
];
            break;

        case "4":
           var arr=["BIM437 Computer Engineering Design",
"BIM444 Computer Engineering Applications",
"BIM309 Artificial Intelligence",
"BIM405 Project Management",
"BIM423 Software Engineering",
"BIM446 Analysis of Algorithms",
"BIM448 Computer Graphics",
"BIM450 Network Management",
"BIM452 Multimedia Computing",
"BIM454 Programming Language Concepts",
"BIM456 Network Security Principles",
"BIM458 Simulation and Modelling",
"BIM460 Software Modelling",
"BIM462 Parallel Systems",
"BIM464 Human-Computer Interaction",
"BIM466 Fuzzy Logic"
,"BIM468    Computer Aided Design"
,"BIM439    Applications of Database Management Systems"
,"BIM470    Neural Networks"
,"BIM493    Mobile Programming I"
,"BIM494    Mobile Programming II"
,"BIM472    Image Processing"
,"BIM474    Introduction to Cryptography"
,"BIM476    Data Acquisition and Processing"
,"BIM478    Management Information Systems"
,"BIM480    Compiler Design"
,"BIM482    Network Programming"
,"BIM484    Distributed Systems"
,"BIM485    Research in Computer Science I"
,"BIM486    Research in Computer Science II"
,"BIM488    Introduction to Pattern Recognition"
,"BIM490    Introduction to Information Retrieval"
,"BIM492    Design Patterns"
,"EEM305    Signals and Systems"
,"EEM334    Digital Systems II"
,"MUH302    Interdisciplinary Applications"
,"BIM441    Introduction to Rough Sets Theory"
,"BIM496    Computer Vision"
,"BIM451    Web Server Programming with MVC"
,"BIM498    Embedded Software Design"
,"BIM453    Introduction to Machine Learning"
,"BIM457    Embedded Programming Languages"
,"BIM455    Introduction to Hardware Design"
];
            break;
        }
                }
                else if(a==="eem")
                {
                    {switch (b) {
        case "1" :
           var arr=["BİM122 Discrete Computational Structures (ENG)",   
"FİZ105 Physics I (ENG) ",  
"FİZ107 Physics Laboratory I (ENG)  ",  
"KİM113 General Chemistry (ENG)",       
"MAT805 Calculus I (ENG)",
"TÜR125 Turkish Language I  ",
"EEM102 Introduction to Electrical Engineering (ENG)",  
"EEM104 Professional Aspects of Electrical & Electronics Engineering (ENG)  ",
"FİZ106 Physics II (ENG)    "   ,
"FİZ108 Physics Laboratory II (ENG) ",
"MAT251 Linear Algebra (ENG)"   ,
"MAT806 Calculus II (ENG)"

];
            break;

        case "2" :
            var arr=["BİL200    Computer Programming (ENG)" ,
"EEM209 Circuit Analysis (ENG)",
"MAT219 Differential Equations (ENG)"   ,
"MAT247 Engineering Mathematics (Mühendislik Matematiği) (ENG)" ,
"TAR165 Atatürk's Principles and History of Turkish Revolution I",  
"EEM208 Electromagnetic Fields and Waves (ENG)" ,
"EEM210 Fundamentals of Semiconductor Device (ENG)" ,
"EEM232 Digital Systems I (ENG) ",
"EEM238 Digital Systems Laboratory (ENG)    ",
"İST244 Engineering Probability (ENG)   ",
"TAR166 Atatürk's Principles and History of Turkish Revolution II"  ,
"TÜR126 Turkish Language II "

];
            break;

        case "3" :
            var arr=["EEM301    Signals and Systems (ENG)"  ,
"EEM311 Principles of Energy Conversion (ENG)",
"EEM321 Electronics I (ENG)"    ,
"EEM328 Electronics Laboratory (ENG)"   ,
"İKT151 Economics (ENG) ",
"EEM308 Introduction to Communication (ENG)",   
"EEM336 Microprocessors I (ENG)"    ,
"EEM342 Fundamentals of Control Systems (ENG)"  ,
"İŞL101 Introduction to Business (ENG)  ",

];
            break;

        case "4":
           var arr=["EEM413 Electrical and Electronics Engineering Design Project I (ENG)",
"EEM445 Design Process for Electrical and Electronics Engineers (ENG)",
"EEM414 Electrical and Electronics Engineering Design Project II (ENG)  ",
"EEM322 Electronics II (ENG)(ENG)"      ,
"EEM334 Digital Systems II (ENG)(ENG)   ",
"EEM409 Random Signals (ENG)(ENG)"  ,
"EEM447 Research in Digital Systems I (ENG)(ENG)    ",
"EEM449 Embedded System Design (ENG)(ENG)",
"EEM451 Industrial Control Systems (ENG)(ENG)   ",
"EEM453 Research in Control and System Theory I (ENG)(ENG)",
"EEM455 Research in Power Systems I (ENG)(ENG)" ,
"EEM457 Research in Signal Processing I (ENG)(ENG)  ",
"EEM459 Research in Electronics I (ENG)(ENG)",
"EEM463 Introduction to Image Processing (ENG)(ENG) ",
"EEM467 Digital Communications (ENG)(ENG)   ",
"EEM469 Communication Electronics (ENG)(ENG)",
"EEM471 Electrical Machinery I (ENG)(ENG)"  ,
"EEM473 Power Systems Analysis I (ENG)(ENG)"    ,
"EEM475 Power Electronics I (ENG)(ENG)" ,
"EEM477 Digital Signal Processing (ENG)(ENG)"   ,
"EEM483 Power Systems Analysis II (ENG)(ENG)",  
"EEM491 Linear Control Systems (ENG)(ENG)"  ,
"EEM493 Digital Control Systems (ENG)(ENG)" ,
"EEM403 Fundamentals of Optoelectronics and Nanophotonics (ENG)(ENG)",  
"EEM448 Research in Digital Systems II (ENG)(ENG)"  ,
"EEM450 Introduction to System Identification (ENG)(ENG)"   ,
"EEM452 Introduction to Robotics (ENG)(ENG) ",
"EEM454 Research in Control and System Theory II (ENG)(ENG)",   
"EEM456 Research in Power Systems II (ENG)(ENG) ",
"EEM458 Research in Signal Processing II (ENG)(ENG) ",
"EEM460 Research in Electronics II (ENG)(ENG)"  ,
"EEM461 Research in Telecommunications I (ENG)(ENG) ",
"EEM462 Research in Telecommunications II (ENG)(ENG)",
"EEM464 System-on-Chip Design (ENG)(ENG)",
"EEM466 High Voltage Techniques (ENG)(ENG)  ",
"EEM470 Microwaves and Antennas (ENG)(ENG)  ",
"EEM476 Power Electronics II (ENG)(ENG)"    ,
"EEM478 Digital Signal Processing Hardware (ENG)(ENG)"  ,
"EEM480 Algorithms and Complexity (ENG)(ENG)"   ,
"EEM482 Fundamentals of Data Networks (ENG)(ENG)"   ,
"EEM486 Computer Architecture (ENG)(ENG)"   ,
"EEM494 Control Systems Laboratory (ENG)(ENG)"  ,
"EEM496 Communications Systems Laboratory (ENG)(ENG)"
];
            break;
        }
                }   
                }
             
                var string="";
             
                for(i=0;i<arr.length;i++)
                {
                    string=string+"<option value="+arr[i]+">"+arr[i]+"</option>";
                }
                document.getElementById("uploaddersid").innerHTML=string;
            }
        </script>
</head>
<body>
<header style="height: 60px;">
        <div class="container" style="margin-left: 100px;">
            <input type="checkbox" name="" id="check">
            
            <div class="logo-container">
                <h3 class="logo">SHS<span>Campus</span></h3>
            </div>

            <div class="nav-btn">
                <div class="nav-links">
                    <ul>
                        <li class="nav-link" style="--i: .6s">
                            <a href="index.html">Home</a>
                        </li>
                        <li class="nav-link" style="--i: .85s">
                            <a href="#">Uploads<i class="fas fa-caret-down"></i></a>
                            <div class="dropdown">
                                <ul>
                                       <li class="dropdown-link">
                                        <a href="index.php">Uploads Notes<i class="fas fa-caret-down"></i></a>
                                        <div class="dropdown second">
                                          
                                        </div>
                                    </li>
                                    <li class="dropdown-link">
                                        <a href="youtube_upload.php">Uploads Videos<i class="fas fa-caret-down"></i></a>
                                        <div class="dropdown second">
                                        
                                        </div>
                                    </li>
                                   
                                   
                                    <div class="arrow"></div>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-link" style="--i: .85s">
                            <a href="#">Downloads<i class="fas fa-caret-down"></i></a>
                            <div class="dropdown">
                                <ul>
                                       <li class="dropdown-link">
                                        <a href="show.php">Downloads Notes<i class="fas fa-caret-down"></i></a>
                                        <div class="dropdown second">
                                          
                                        </div>
                                    </li>
                                    <li class="dropdown-link">
                                        <a href="youtube_download.php">Watch Videos<i class="fas fa-caret-down"></i></a>
                                        <div class="dropdown second">
                                        
                                        </div>
                                    </li>
                                   
                                   
                                    <div class="arrow"></div>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-link" style="--i: 1.1s">
                            <a href="#">Who Are We ?<i class="fas fa-caret-down"></i></a>
                            <div class="dropdown">
                                <ul>
                                    <li class="dropdown-link">
                                        <a href="#">Akif Sakallıoglu</a>
                                    </li>
                                    <li class="dropdown-link">
                                        <a href="#">Alzahraa Saad</a>
                                    </li>
                                
                                    <li class="dropdown-link">
                                        <a href="burak.html">Burak Eraslan</a>
                                    </li>
                                     <li class="dropdown-link">
                                        <a href="#">Cemile Ceren Bektas</a>
                                    </li>
                                     <li class="dropdown-link">
                                        <a href="#">Emine Isık</a>
                                    </li>
                                     <li class="dropdown-link">
                                        <a href="#">Huseyin Gülçiçek</a>
                                    </li>
                                   
                                    <div class="arrow"></div>
                                </ul>
                            </div>
                        </li>
                       
                    </ul>
                </div>

                 <div class="nav-link" style="--i: 3s; " >
                    <a href="login.php" style="padding: 4px; height:30px; margin-top: 10px; "   class="btn transparent">Profile</a>
                    <div class="dropdown" >
                                <ul>
                                       <li class="dropdown-link">
                                        <a href="profile.php">Account<i class="fas fa-caret-down"></i></a>
                                        <div class="dropdown second">
                                          
                                        </div>
                                    </li>
                                    <li class="dropdown-link">
                                       <a href="logout.php">Log Out<i class="fas fa-caret-down"></i></a>
                                        <div class="dropdown second">
                                        
                                        </div>
                                    </li>
                                   
                                   
                                    <div class="arrow"></div>
                                </ul>
                            </div>
                    
                </div>
            </div>

            <div class="hamburger-menu-container">
                <div class="hamburger-menu">
                    <div></div>
                </div>
            </div>
        </div>
    </header>
<section style="overflow: auto;">
<div class="arkaplan">
    <div class="container" style="margin-top: 50px; margin-bottom: 50px; margin-left: 25%; ">
    <div class = "row justify-content-md-center">
            <div class="col">
            </div>
            <div class="col-md-auto">
                <h3>GIVE A RATE: </h3>
            </div>
            <div class="col-md-auto">
                <i class="fa fa-star fa-2x" data-index="0"></i>
                <i class="fa fa-star fa-2x" data-index="1"></i>
                <i class="fa fa-star fa-2x" data-index="2"></i>
                <i class="fa fa-star fa-2x" data-index="3"></i>
                <i class="fa fa-star fa-2x" data-index="4"></i>
            </div>
    </div>
    </div>
    <div class="container">
    <div class="row justify-content-md-center">
            <div class="col-md-auto" style="margin-left: 30%;">
                <textarea class="form-control" id="mainComment" placeholder="Add Public Comment" cols="100" rows="2"></textarea><br>
                <button style="float:right" class="btn-primary btn" onclick="isReply = false;" id="addComment">Add Comment</button>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-md-auto">
                <h2><b id="numberComments"><?php echo $numTotal ?> Comments </b></h2>
                    <div class="userComments">
                        
                    </div>
            </div>
        </div>
    <div class="row replyRow" style="display:none;">
        <div class="col-md-auto">
            <textarea class="form-control" id="replyComment" placeholder="Add Public Comment" cols="100" rows="2"></textarea><br>
            <button style="float:right" class="btn-primary btn" onclick="isReply = true;" id="addReply">Add Reply</button>
            <button style="float:right" class="btn-default btn" onclick="$('.replyRow').hide();">Close</button>
        </div>
    </div>
</div>
</div>
</section>
   <script src="http://code.jquery.com/jquery-3.4.0.min.js" integrity="sha256-BJeo0qm959uMBGb65z40ejJYGSgR7REI4+CW1fNKwOg=" crossorigin="anonymous"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
   <script>
   var commentID = 0, ratedIndex = -1, uID = "", dID = 0, dName = "", sID = 0, docId = 0, depName = "";
   var max = <?php echo $numTotal ?>;
   var isReply = false;

    $(document).ready(function () {
        resetStarColors();

        if (localStorage.getItem('ratedIndex') != null) {
            setStars(parseInt(localStorage.getItem('ratedIndex')));
            sID = localStorage.getItem('sID');
        }
        $('.fa-star').on('click', function () {
            ratedIndex = parseInt($(this).data('index'));
            localStorage.setItem('ratedIndex', ratedIndex);
            saveToTheDB();
        });

        $('.fa-star').mouseover(function () {
            resetStarColors();
            var currentIndex = parseInt($(this).data('index'));
            setStars(currentIndex);
                
        });
        $('.fa-star').mouseleave(function () {
            resetStarColors();

            if(ratedIndex != -1)
                setStars(ratedIndex);
        });

        $("#addComment, #addReply").on('click', function () {
                var comment;

                if (!isReply)
                    comment = $("#mainComment").val();
                else
                    comment = $("#replyComment").val();

               if (comment.length > 5) {
                    $.ajax({
                        url: 'views.php',
                        method: 'POST',
                        dataType: 'text',
                        data: {
                            addComment: 1,
                            uID:uID,
                            depName: '<?php echo $_GET['name']; ?>',
                            docId: '<?php echo $_GET['id']; ?>',
                            comment: comment,
                            isReply: isReply,
                            max:max,
                            commentID: commentID
                        }, success: function (response) {
                            max++;
                            $('#numberComments').text(max + " Comments");

                            if (!isReply) {
                                $(".userComments").prepend(response);
                                $("#mainComment").val("");
                            } else {
                                commentID = 0;
                                $("#replyComment").val("");
                                $(".replyRow").hide();
                                $('.replyRow').parent().next().append(response);
                            }
                        }
                    });
               } else
                   alert('Please Check Your Inputs');
           });

        getAllComments(0, max);
    });
    function reply(caller) {
        commentID = $(caller).attr('data-commentID');
        $(".replyRow").insertAfter($(caller));
        $('.replyRow').show();
    }
    function saveToTheDB() {
        $.ajax({
            url: "views.php",
            method: "POST",
            dataType: 'json',
            data: {
                send: 1,
                ratedIndex: ratedIndex,
                uID:uID,
                sID:sID,
                dName:'<?php echo $_GET['name']; ?>',
                dID:'<?php echo $_GET['id']; ?>'
            }, success: function (r) {
                uID = r.u_id;
                dID = r.document_id;
                sID = r.document_id;
                dName = r.document_name;
                localStorage.setItem('sID', sID);
            }
        });
    }
    function setStars(max) {
        for (var i=0; i <= max; i++)
            $('.fa-star:eq('+i+')').css('color', 'yellow');
    }

    function resetStarColors() {
        $('.fa-star').css('color', 'black');
    }

    function getAllComments(start,max){
        if(start>max){
            return;
        }
        $.ajax({
            url: 'views.php',
            method: 'POST',
            dataType: 'text',
            data: {
            getAllComments: 1,
            start: start,
            dName:'<?php echo $_GET['name']; ?>',
            dID:'<?php echo $_GET['id']; ?>'
            }, success: function (response) {
                $(".userComments").append(response);
                getAllComments((start+20), max);
            }
        });
    }
   </script>
</body>
</html>