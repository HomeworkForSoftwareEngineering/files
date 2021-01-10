
            function random_function()
            {    
                var a=document.getElementById("bolumid").value;
                var b=document.getElementById("seneid").value;
               if(a==="ceng")
                {switch (b) {
        case "1" :
           var arr=["MAT805 Calculus I","KIM113 General Chemistry","FIZ105  Physics I","FIZ107  Physics Laboratory I","BIM101 Computer Programming I","TUR125 Turkish Language I","MAT806 Calculus II",
"FIZ106 Physics II",
"FIZ108 Physics Laboratory II",
"BIM122 Discrete Computational Structures",
"BIM102 Computer Programming II",
"TUR126 Turkish Language II"
];
            break;

        case "2" :
            var arr=["BIM207  Computer Programming III",
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
            var arr=["BIM311  Systems Analysis and Design",
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
,"BIM468  Computer Aided Design"
,"BIM439  Applications of Database Management Systems"
,"BIM470  Neural Networks"
,"BIM493  Mobile Programming I"
,"BIM494  Mobile Programming II"
,"BIM472  Image Processing"
,"BIM474  Introduction to Cryptography"
,"BIM476  Data Acquisition and Processing"
,"BIM478  Management Information Systems"
,"BIM480  Compiler Design"
,"BIM482  Network Programming"
,"BIM484  Distributed Systems"
,"BIM485  Research in Computer Science I"
,"BIM486  Research in Computer Science II"
,"BIM488  Introduction to Pattern Recognition"
,"BIM490  Introduction to Information Retrieval"
,"BIM492  Design Patterns"
,"EEM305  Signals and Systems"
,"EEM334  Digital Systems II"
,"MUH302  Interdisciplinary Applications"
,"BIM441  Introduction to Rough Sets Theory"
,"BIM496  Computer Vision"
,"BIM451  Web Server Programming with MVC"
,"BIM498  Embedded Software Design"
,"BIM453  Introduction to Machine Learning"
,"BIM457  Embedded Programming Languages"
,"BIM455  Introduction to Hardware Design"];
            break;
        }
                }
                 else if(a==="eem")
                {
                    switch (b) {
        case "1" :
           var arr=["BİM122 Discrete Computational Structures (ENG)", 
"FİZ105 Physics I (ENG) ",  
"FİZ107 Physics Laboratory I (ENG)  ",  
"KİM113 General Chemistry (ENG)",   
"MAT805 Calculus I (ENG)",
"TÜR125 Turkish Language I  ",
"EEM102 Introduction to Electrical Engineering (ENG)",  
"EEM104 Professional Aspects of Electrical & Electronics Engineering (ENG)  ",
"FİZ106 Physics II (ENG)  " ,
"FİZ108 Physics Laboratory II (ENG) ",
"MAT251 Linear Algebra (ENG)" ,
"MAT806 Calculus II (ENG)"

];
            break;

        case "2" :
            var arr=["BİL200  Computer Programming (ENG)" ,
"EEM209 Circuit Analysis (ENG)",
"MAT219 Differential Equations (ENG)" ,
"MAT247 Engineering Mathematics (Mühendislik Matematiği) (ENG)" ,
"TAR165 Atatürk's Principles and History of Turkish Revolution I",  
"EEM208 Electromagnetic Fields and Waves (ENG)" ,
"EEM210 Fundamentals of Semiconductor Device (ENG)" ,
"EEM232 Digital Systems I (ENG) ",
"EEM238 Digital Systems Laboratory (ENG)  ",
"İST244 Engineering Probability (ENG) ",
"TAR166 Atatürk's Principles and History of Turkish Revolution II"  ,
"TÜR126 Turkish Language II "

];
            break;

        case "3" :
            var arr=["EEM301  Signals and Systems (ENG)"  ,
"EEM311 Principles of Energy Conversion (ENG)",
"EEM321 Electronics I (ENG)"  ,
"EEM328 Electronics Laboratory (ENG)" ,
"İKT151 Economics (ENG) ",
"EEM308 Introduction to Communication (ENG)", 
"EEM336 Microprocessors I (ENG)"  ,
"EEM342 Fundamentals of Control Systems (ENG)"  ,
"İŞL101 Introduction to Business (ENG)  ",

];
            break;

        case "4":
           var arr=["EEM413 Electrical and Electronics Engineering Design Project I (ENG)",
"EEM445 Design Process for Electrical and Electronics Engineers (ENG)",
"EEM414 Electrical and Electronics Engineering Design Project II (ENG)  ",
"EEM322 Electronics II (ENG)(ENG)"    ,
"EEM334 Digital Systems II (ENG)(ENG) ",
"EEM409 Random Signals (ENG)(ENG)"  ,
"EEM447 Research in Digital Systems I (ENG)(ENG)  ",
"EEM449 Embedded System Design (ENG)(ENG)",
"EEM451 Industrial Control Systems (ENG)(ENG) ",
"EEM453 Research in Control and System Theory I (ENG)(ENG)",
"EEM455 Research in Power Systems I (ENG)(ENG)" ,
"EEM457 Research in Signal Processing I (ENG)(ENG)  ",
"EEM459 Research in Electronics I (ENG)(ENG)",
"EEM463 Introduction to Image Processing (ENG)(ENG) ",
"EEM467 Digital Communications (ENG)(ENG) ",
"EEM469 Communication Electronics (ENG)(ENG)",
"EEM471 Electrical Machinery I (ENG)(ENG)"  ,
"EEM473 Power Systems Analysis I (ENG)(ENG)"  ,
"EEM475 Power Electronics I (ENG)(ENG)" ,
"EEM477 Digital Signal Processing (ENG)(ENG)" ,
"EEM483 Power Systems Analysis II (ENG)(ENG)",  
"EEM491 Linear Control Systems (ENG)(ENG)"  ,
"EEM493 Digital Control Systems (ENG)(ENG)" ,
"EEM403 Fundamentals of Optoelectronics and Nanophotonics (ENG)(ENG)",  
"EEM448 Research in Digital Systems II (ENG)(ENG)"  ,
"EEM450 Introduction to System Identification (ENG)(ENG)" ,
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
"EEM476 Power Electronics II (ENG)(ENG)"  ,
"EEM478 Digital Signal Processing Hardware (ENG)(ENG)"  ,
"EEM480 Algorithms and Complexity (ENG)(ENG)" ,
"EEM482 Fundamentals of Data Networks (ENG)(ENG)" ,
"EEM486 Computer Architecture (ENG)(ENG)" ,
"EEM494 Control Systems Laboratory (ENG)(ENG)"  ,
"EEM496 Communications Systems Laboratory (ENG)(ENG)"
];
            break;
        }
                } 
                else if(a==="mechanical")
                {
                    switch (b) {
        case "1" :
           var arr=[
            "FIZ 105 Physics I",
            "FIZ 107 Physics Laboratory I",
            "KIM 113 General Chemistry",
            "MKM 101 Technical Drawing for Mechanical Engineers",
            "MKM 103 Technical English for Mechanical Engineers",
            "FIZ 106 Physics II",
            "FIZ 108 Physics Laboratory II",
            "MAT 805 Calculus I",
            "MAT 806 Calculus II",
            "MKM 102 Introduction to Mechanical Engineering",
            "MKM 104 Computer Aided Engineering Technical Drawing",
            "TUR 125 Turkish Language I",
            "TUR 126 Turkish Language II"
            ];
            break;

        case "2" :
            var arr=[
            "BIL 200 Computer Programming",
            "IKT 356 Engineering Economics",
            "IST 201 Statistics",
            "MAT 219 Differential Equations",
            "MEK 217 Engineering Mechanics: Statics",
            "TER 207 Thermodynamics I",
            "EEM 214 Electrical Engineering for Mechanical Engineers",
            "MEK 216 Engineering Mechanics: Dynamics",
            "MLZ 232 Introduction to Materials Science",
            "NUM 202 Linear Algebra and Numerical Methods",
            "TAR 165 Atatürk's Principles and History of Turkish Revolution I",
            "TAR 166 Atatürk's Principles and History of Turkish Revolution II",
            "TER 208 Thermodynamics II"
            ];
            break;

        case "3" :
            var arr=[
            "MEK 311 Strength of Materials",
            "MEK 323 Fundamentals of Fluid Mechanics",
            "MKM 301 Theory of Machines",
            "EEM 310 Control Systems",
            "MKM 302 Machine Design I",
            "MKM 303 Heat Transfer",
            "MKM 304 Manufacturing Techniques",
            "MKM 306 Experimental Engineering"
            ];
            break;

        case "4":
           var arr=[
            "MKM 401 Machine Design II",
            "MKM 403 Mechanical Engineering Design I",
            "ISG 401 Occupational Health and Safety I",
            "ISG 402 Occupational Health and Safety II",
            "MKM 404 Mechanical Engineering Design II",
            "MKM 202 Problem Solving Methods",
            "MKM 307 Engineering Materials for Mechanical Engineers",
            "MKM 405 Machining and Machine Tools",
            "MKM 408 Machining and Machine Tools",
            "MKM 416 Theory of Elasticit",
            "MKM 406 Reliability in Machine Design",
            "MKM 407 Maintenance in Mechanical Engineering",
            "MKM 409 Shape Memory Alloys",
            "MKM 410 Aircraft Engine Design",
            "MKM 411 System Engineering Fundamentals",
            "MKM 412 Internal Combustion Engines",
            "MKM 413 Engineering Applications of Finite Element Analysis",
            "MKM 414 Refrigeration Sytems",
            "MKM 418 Materials Handling Techniques",
            "MKM 440 Introduction to Computer Aided Manufacturing"
            ];
            break;
        }
                }  
                else if(a==="enviromental")
                {
                    switch (b) {
        case "1" :
           var arr=[
            "CEV 209 Technical English I",
            "FIZ 105 Fizik I",
            "FIZ 107 Fizik Laboratuvarı I",
            "KIM 117 General Chemistry I",
            "MAT 805 Genel Matematik I",
            "TRS 127 Teknik Resim",
            "CEV 203 Çevre Mühendisliğine Giriş",
            "CEV 203 Introduction to Environmental Engineering",
            "FIZ 106 Fizik II",
            "FIZ 108 Fizik Laboratuvarı II",
            "KIM 115 Genel Kimya Laboratuvarı",
            "KIM 115 General Chemistry Laboratory",
            "KIM 118 General Chemistry II",
            "MAT 806 Genel Matematik II",
            "TUR 125 Türk Dili I",
            "TUR 126 Türk Dili II"
            ];
            break;

        case "2" :
            var arr=[
            "CEV 210 Technical English II",
            "CEV 211 Çevre Kimyası Laboratuvarı I",
            "CEV 213 Çevre Kimyası I",
            "IKT 151 Economics",
            "MAT 219 Diferansiyel Denklemler",
            "MLZ 203 Malzeme Bilimi",
            "MLZ 203 Materials Science",
            "BIY 353 Çevre Mikrobiyolojisi",
            "BIY 537 Çevre Mikrobiyolojisi Laboratuvarı",
            "CEV 206Çevre Kimyası II",
            "CEV 206 Environmental Chemistry II",
            "CEV 212 Çevre Kimyası Laboratuvarı II",
            "CEV 219 Ekoloji",
            "MEK 215 Statik ve Mukavemet",
            "MEK 215 Statics and Strength of Materials",
            "NUM 202 Lineer Cebir ve Sayısal Yöntemler",
            "NUM 202 Linear Algebra and Numerical Methods",
            "TAR 165 Atatürk İlkeleri ve İnkılap Tarihi I",
            "TAR 166 Atatürk İlkeleri ve İnkılap Tarihi II"
            ];
            break;

        case "3" :
            var arr=[
            "CEV 305 Temel İşlemler ve Süreçler I",
            "CEV 305 Unit Operations and Processes I",
            "CEV 310 Su ve Toprak Kirliliği",
            "CEV 313 Unit Operations and Processes Laboratory I",
            "INS 308 Hidroloji",
            "INS 308 Hydrology",
            "MEK 315 Akışkanlar Mekaniği",
            "CEV 312 Su Temini ve Atıksu Uzaklaştırma",
            "CEV 314 Unit Operations and Processes Laboratory II",
            "CEV 316 Hava Kirliliği",
            "CEV 316 Air Pollution",
            "CEV 324 Temel İşlemler ve Süreçler II",
            "IST 201 İstatistik",
            "TER 403 Termodinamik"
            ];
            break;

        case "4":
           var arr=[
            "CEV 421 Katı Atık Yönetimi",
            "CEV 427 Air Pollution Control",
            "CEV 445 Çevre Modelleme",
            "CEV 445 Environmental Modeling",
            "CEV 447 Atıksu Mühendisliği",
            "CEV 447 Wastewater Engineering",
            "CEV 438 Çevre Yönetimi",
            "CEV 442 Tehlikeli Atık Yönetimi",
            "CEV 449 Çevre Mühendisliğinde Bitirme Projesi I",
            "CEV 450 Çevre Mühendisliğinde Bitirme Projesi II",
            "ISG 401 İş Sağlığı ve Güvenliği I",
            "ISG 402 İş Sağlığı ve Güvenliği II",
            "CEV 453 Çevre Etiği ve Çevre Mühendisliği",
            "CEV 315 Biyoremediasyon Teknolojileri",
            "CEV 317 Tarımsal Çevre Kirliliği",
            "CEV 326 Çevre Mühendisliğinde Bilişim Teknolojileri",
            "CEV 320 Enerji Üretiminden Kaynaklanan Çevre Sorunları",
            "CEV 336 Çevre Sağlığı",
            "CEV 340 Çevresel İstatistik Analizi Uygulamaları",
            "MUH 302 Disiplinlerarası Uygulamalar",
            "CEV 423 Çevre Bilimlerinde Uzaktan Algılama ve CBS Uygulamaları",
            "CEV 431 Su Arıtımı Projesi",
            "CEV 457 Mühendislik Bilimlerinde Bilgisayar Destekli Haritalama",
            "CEV 461 Yeşil Mühendislik Tasarımı ve Sürdürülebilirlik",
            "CEV 469 Membran Sistemleri ve Süreçleri Kulla. Su ve Atıksu Arıtımı",
            "CEV 471 Gürültü Kirliliği ve Kontrolü",
            "CEV 475 Çevre Mevzuatı I",
            "CEV 484 Küçük Ölçekli Atıksu Arıtım Sistemleri",
            "CEV 492 Hava Kalitesi Yönetimi Projesi",
            "CEV 328 Instrumental Analysis in Environmental Studies",
            "CEV 408 Su Kalitesi Değerlendirilmesi",
            "CEV 432 Atıksu Arıtımı Projesi",
            "CEV 443 Suların Yeniden Kullanımı",
            "CEV 444 Katı Atık Yönetimi Projesi",
            "CEV 462 Bilgisayar Destekli Mühendislik Tasarımı",
            "CEV 465 Arıtma Çamurlarının Arıtımı ve Bertarafı",
            "CEV 466 Ekolojik Planlama ve Ekoteknoloji",
            "CEV 467 Environmental Exposure Assessment",
            "CEV 468 Havza Yönetimi",
            "CEV 476 Çevre Mevzuatı II",
            "CEV 480 Hava Kirliliği Meteorolojisi ve Atmosferik Dağılım",
            "CEV 482 Hava Kirliliği Laboratuvarı",
            "CEV 486 Endüstriyel Atıksu Arıtımı",
            "CEV 490 Su ve Atıksuların İleri Arıtımı II",
            "CEV 494 Çevre Denetimi",
            "CEV 496 Mikrobiyolojik Arıtım Yöntemleri"
            ];
            break;
        }
                }   
                else if(a==="civil")
                {
                    {switch (b) {
        case "1" :
           var arr=[
            "FIZ105 Physics I",
            "FIZ 107 Physics Laboratory I",
            "ING 250 Reading and Speaking in English",
            "INS 101 Introduction to Civil Engineering",
            "KIM 113 General Chemistry",
            "KIM 115 General Chemistry Laboratory",
            "MAT 805 Calculus I",
            "TÜR 125 Turk Dili I",
            "BIL 810 Computer Applications in Civil Engineering",
            "FIZ 106 Physics II",
            "FIZ 108 Physics Laboratory II",
            "ING 360 English for Business",
            "MAT 806 Calculus II",
            "TRS 110 Technical Drawing in Civil Engineering",
            "TUR 126 Turk Dili II"
            ];
            break;

        case "2" :
            var arr=[
            "IST 201 Statistics",
            "MAT 219 Differential Equations",
            "NUM 202 Linear Algebra and Numerical Methods",
            "MEK 201 Statics",
            "INS 241 Materials Science in Civil Engineering",
            "INS 239 Law and Ethics in Civil Engineering",
            "TAR 165 Atatürk İlkeleri ve İnkılap Tarihi I",
            "IKT 356 Engineering Economics",
            "MEK 206 Dynamics",
            "MEK 212 Strength of Materials I",
            "MLZ 204 Materials of Construction",
            "INS 246 Computer Programming in Civil Engineering",
            "TAR 166 Atatürk İlkeleri ve İnkılap Tarihi II",
            "INS 240 Hydrology"
            ];
            break;

        case "3" :
            var arr=[
            "MEK 307 Fluid Mechanics",
            "INS 315 Soil Mechanics I",
            "INS 317 Soil Mechanics Laboratory",
            "INS 311 Transportation Engineering I",
            "INS 312 Construction Engineering and Management",
            "INS 307 Structural Analysis I",
            "INS 320 Steel Structures",
            "INS 342 Foundation Engineering I",
            "INS 302 Reinforced Concrete I",
            "INS 322 Hydraulics"
            ];
            break;

        case "4":
           var arr=[
            "INS 417 Design Project",
            "INS 415 Special Topics in Civil Engineering",
            "ISG 401 İş Sağlığı ve Güvenliği I",
            "INS 414 Applications of Design in Civil Engineering",
            "ISG 402 İş Sağlığı ve Güvenliği",
            "BIL 473 Foundation Engineering and Computer Applications",
            "INS 401 Reinforced Concrete Project",
            "INS 407 Reinforced Concrete II",
            "INS 409 Pavement Design",
            "INS 411 Transportation Engineering II",
            "INS 451 Geographic Information Systems (GIS) Applications in Hydrology and Hydraulics",
            "INS 452 Computer Applications in Hydrology and Hydraulics",
            "INS 453 Railway Engineering",
            "INS 454 Earthquake Analysis of Structures",
            "INS 455 Highway Design",
            "INS 456 Ground Water Hydrology",
            "INS 457 Construction Cost Design",
            "INS 458 Testing of Concrete",
            "INS 459 Geotechnical Design",
            "INS 460 Admixture for Concrete",
            "INS 461 Structural Design for Reinforced Concrete Buildings",
            "INS 462 Properties of Fresh and Hardened Concrete",
            "INS 463 Hydraulic Design",
            "INS 464 Concrete Durability",
            "INS 465 Steel Structural Design",
            "INS 466 Steel Structure Project",
            "INS 467 Construction Equipments",
            "INS 468 Computer-Based Project Management",
            "INS 469 Renewable Energy With Water, Wind and Wave Power",
            "TOP 102 Surveying",
            "INS 492 Water Resources Engineering",
            "INS 470 Concrete Technology",
            "INS 472 Introduction Traffic Engineering",
            "INS 474 Tunnels",
            "INS 476 Project Planning with Primavera and MS Project",
            "INS 478 Construction Cost Analysis and Estimating",
            "INS 480 Concrete Making Materials",
            "INS 481 Soil Mechanics II",
            "INS 482 Ground Improvement",
            "INS 483 Retaining Structure",
            "INS 484 Foundation Engineering II",
            "INS 485 Irrigation and Drainage",
            "INS 486 Introduction to Soil Dynamics",
            "INS 487 Water Structures",
            "INS 488 Enviromental Geotechnology",
            "INS 489 Open Channel Hydraulics",
            "INS 490 Coastal and Port Engineering",
            "INS 310 Water Supply and Sewerage",
            "INS 494 Civil Engineering Construction",
            "INS 495 Highway Pavements",
            "INS 496 Construction Planning and Management",
            "INS 498 Introduction to Structural Dynamics",
            "MEK 403 Strength of Materials II",
            "JEO 201 Engineering Geology",
            "MUH 302 Interdisciplinary Applications",
            "INS 471 Numerical Modeling in Hydrology and Hydraulics",
            "INS 314 Structural Analysis II"
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
           var arr=["MAT805 Calculus I","KIM113 General Chemistry","FIZ105  Physics I","FIZ107  Physics Laboratory I","BIM101 Computer Programming I","TUR125 Turkish Language I","MAT806 Calculus II",
"FIZ106 Physics II",
"FIZ108 Physics Laboratory II",
"BIM122 Discrete Computational Structures",
"BIM102 Computer Programming II",
"TUR126 Turkish Language II"
];
            break;

        case "2" :
            var arr=["BIM207  Computer Programming III",
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
            var arr=["BIM311  Systems Analysis and Design",
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
,"BIM468  Computer Aided Design"
,"BIM439  Applications of Database Management Systems"
,"BIM470  Neural Networks"
,"BIM493  Mobile Programming I"
,"BIM494  Mobile Programming II"
,"BIM472  Image Processing"
,"BIM474  Introduction to Cryptography"
,"BIM476  Data Acquisition and Processing"
,"BIM478  Management Information Systems"
,"BIM480  Compiler Design"
,"BIM482  Network Programming"
,"BIM484  Distributed Systems"
,"BIM485  Research in Computer Science I"
,"BIM486  Research in Computer Science II"
,"BIM488  Introduction to Pattern Recognition"
,"BIM490  Introduction to Information Retrieval"
,"BIM492  Design Patterns"
,"EEM305  Signals and Systems"
,"EEM334  Digital Systems II"
,"MUH302  Interdisciplinary Applications"
,"BIM441  Introduction to Rough Sets Theory"
,"BIM496  Computer Vision"
,"BIM451  Web Server Programming with MVC"
,"BIM498  Embedded Software Design"
,"BIM453  Introduction to Machine Learning"
,"BIM457  Embedded Programming Languages"
,"BIM455  Introduction to Hardware Design"];
            break;
        }
                }
                 else if(a==="eem")
                {
                    switch (b) {
        case "1" :
           var arr=["BİM122 Discrete Computational Structures (ENG)", 
"FİZ105 Physics I (ENG) ",  
"FİZ107 Physics Laboratory I (ENG)  ",  
"KİM113 General Chemistry (ENG)",   
"MAT805 Calculus I (ENG)",
"TÜR125 Turkish Language I  ",
"EEM102 Introduction to Electrical Engineering (ENG)",  
"EEM104 Professional Aspects of Electrical & Electronics Engineering (ENG)  ",
"FİZ106 Physics II (ENG)  " ,
"FİZ108 Physics Laboratory II (ENG) ",
"MAT251 Linear Algebra (ENG)" ,
"MAT806 Calculus II (ENG)"

];
            break;

        case "2" :
            var arr=["BİL200  Computer Programming (ENG)" ,
"EEM209 Circuit Analysis (ENG)",
"MAT219 Differential Equations (ENG)" ,
"MAT247 Engineering Mathematics (Mühendislik Matematiği) (ENG)" ,
"TAR165 Atatürk's Principles and History of Turkish Revolution I",  
"EEM208 Electromagnetic Fields and Waves (ENG)" ,
"EEM210 Fundamentals of Semiconductor Device (ENG)" ,
"EEM232 Digital Systems I (ENG) ",
"EEM238 Digital Systems Laboratory (ENG)  ",
"İST244 Engineering Probability (ENG) ",
"TAR166 Atatürk's Principles and History of Turkish Revolution II"  ,
"TÜR126 Turkish Language II "

];
            break;

        case "3" :
            var arr=["EEM301  Signals and Systems (ENG)"  ,
"EEM311 Principles of Energy Conversion (ENG)",
"EEM321 Electronics I (ENG)"  ,
"EEM328 Electronics Laboratory (ENG)" ,
"İKT151 Economics (ENG) ",
"EEM308 Introduction to Communication (ENG)", 
"EEM336 Microprocessors I (ENG)"  ,
"EEM342 Fundamentals of Control Systems (ENG)"  ,
"İŞL101 Introduction to Business (ENG)  ",

];
            break;

        case "4":
           var arr=["EEM413 Electrical and Electronics Engineering Design Project I (ENG)",
"EEM445 Design Process for Electrical and Electronics Engineers (ENG)",
"EEM414 Electrical and Electronics Engineering Design Project II (ENG)  ",
"EEM322 Electronics II (ENG)(ENG)"    ,
"EEM334 Digital Systems II (ENG)(ENG) ",
"EEM409 Random Signals (ENG)(ENG)"  ,
"EEM447 Research in Digital Systems I (ENG)(ENG)  ",
"EEM449 Embedded System Design (ENG)(ENG)",
"EEM451 Industrial Control Systems (ENG)(ENG) ",
"EEM453 Research in Control and System Theory I (ENG)(ENG)",
"EEM455 Research in Power Systems I (ENG)(ENG)" ,
"EEM457 Research in Signal Processing I (ENG)(ENG)  ",
"EEM459 Research in Electronics I (ENG)(ENG)",
"EEM463 Introduction to Image Processing (ENG)(ENG) ",
"EEM467 Digital Communications (ENG)(ENG) ",
"EEM469 Communication Electronics (ENG)(ENG)",
"EEM471 Electrical Machinery I (ENG)(ENG)"  ,
"EEM473 Power Systems Analysis I (ENG)(ENG)"  ,
"EEM475 Power Electronics I (ENG)(ENG)" ,
"EEM477 Digital Signal Processing (ENG)(ENG)" ,
"EEM483 Power Systems Analysis II (ENG)(ENG)",  
"EEM491 Linear Control Systems (ENG)(ENG)"  ,
"EEM493 Digital Control Systems (ENG)(ENG)" ,
"EEM403 Fundamentals of Optoelectronics and Nanophotonics (ENG)(ENG)",  
"EEM448 Research in Digital Systems II (ENG)(ENG)"  ,
"EEM450 Introduction to System Identification (ENG)(ENG)" ,
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
"EEM476 Power Electronics II (ENG)(ENG)"  ,
"EEM478 Digital Signal Processing Hardware (ENG)(ENG)"  ,
"EEM480 Algorithms and Complexity (ENG)(ENG)" ,
"EEM482 Fundamentals of Data Networks (ENG)(ENG)" ,
"EEM486 Computer Architecture (ENG)(ENG)" ,
"EEM494 Control Systems Laboratory (ENG)(ENG)"  ,
"EEM496 Communications Systems Laboratory (ENG)(ENG)"
];
            break;
        }
                } 
                else if(a==="mechanical")
                {
                    switch (b) {
        case "1" :
           var arr=[
            "FIZ 105 Physics I",
            "FIZ 107 Physics Laboratory I",
            "KIM 113 General Chemistry",
            "MKM 101 Technical Drawing for Mechanical Engineers",
            "MKM 103 Technical English for Mechanical Engineers",
            "FIZ 106 Physics II",
            "FIZ 108 Physics Laboratory II",
            "MAT 805 Calculus I",
            "MAT 806 Calculus II",
            "MKM 102 Introduction to Mechanical Engineering",
            "MKM 104 Computer Aided Engineering Technical Drawing",
            "TUR 125 Turkish Language I",
            "TUR 126 Turkish Language II"
            ];
            break;

        case "2" :
            var arr=[
            "BIL 200 Computer Programming",
            "IKT 356 Engineering Economics",
            "IST 201 Statistics",
            "MAT 219 Differential Equations",
            "MEK 217 Engineering Mechanics: Statics",
            "TER 207 Thermodynamics I",
            "EEM 214 Electrical Engineering for Mechanical Engineers",
            "MEK 216 Engineering Mechanics: Dynamics",
            "MLZ 232 Introduction to Materials Science",
            "NUM 202 Linear Algebra and Numerical Methods",
            "TAR 165 Atatürk's Principles and History of Turkish Revolution I",
            "TAR 166 Atatürk's Principles and History of Turkish Revolution II",
            "TER 208 Thermodynamics II"
            ];
            break;

        case "3" :
            var arr=[
            "MEK 311 Strength of Materials",
            "MEK 323 Fundamentals of Fluid Mechanics",
            "MKM 301 Theory of Machines",
            "EEM 310 Control Systems",
            "MKM 302 Machine Design I",
            "MKM 303 Heat Transfer",
            "MKM 304 Manufacturing Techniques",
            "MKM 306 Experimental Engineering"
            ];
            break;

        case "4":
           var arr=[
            "MKM 401 Machine Design II",
            "MKM 403 Mechanical Engineering Design I",
            "ISG 401 Occupational Health and Safety I",
            "ISG 402 Occupational Health and Safety II",
            "MKM 404 Mechanical Engineering Design II",
            "MKM 202 Problem Solving Methods",
            "MKM 307 Engineering Materials for Mechanical Engineers",
            "MKM 405 Machining and Machine Tools",
            "MKM 408 Machining and Machine Tools",
            "MKM 416 Theory of Elasticit",
            "MKM 406 Reliability in Machine Design",
            "MKM 407 Maintenance in Mechanical Engineering",
            "MKM 409 Shape Memory Alloys",
            "MKM 410 Aircraft Engine Design",
            "MKM 411 System Engineering Fundamentals",
            "MKM 412 Internal Combustion Engines",
            "MKM 413 Engineering Applications of Finite Element Analysis",
            "MKM 414 Refrigeration Sytems",
            "MKM 418 Materials Handling Techniques",
            "MKM 440 Introduction to Computer Aided Manufacturing"
            ];
            break;
        }
                }  
                else if(a==="enviromental")
                {
                    switch (b) {
        case "1" :
           var arr=[
            "CEV 209 Technical English I",
            "FIZ 105 Fizik I",
            "FIZ 107 Fizik Laboratuvarı I",
            "KIM 117 General Chemistry I",
            "MAT 805 Genel Matematik I",
            "TRS 127 Teknik Resim",
            "CEV 203 Çevre Mühendisliğine Giriş",
            "CEV 203 Introduction to Environmental Engineering",
            "FIZ 106 Fizik II",
            "FIZ 108 Fizik Laboratuvarı II",
            "KIM 115 Genel Kimya Laboratuvarı",
            "KIM 115 General Chemistry Laboratory",
            "KIM 118 General Chemistry II",
            "MAT 806 Genel Matematik II",
            "TUR 125 Türk Dili I",
            "TUR 126 Türk Dili II"
            ];
            break;

        case "2" :
            var arr=[
            "CEV 210 Technical English II",
            "CEV 211 Çevre Kimyası Laboratuvarı I",
            "CEV 213 Çevre Kimyası I",
            "IKT 151 Economics",
            "MAT 219 Diferansiyel Denklemler",
            "MLZ 203 Malzeme Bilimi",
            "MLZ 203 Materials Science",
            "BIY 353 Çevre Mikrobiyolojisi",
            "BIY 537 Çevre Mikrobiyolojisi Laboratuvarı",
            "CEV 206Çevre Kimyası II",
            "CEV 206 Environmental Chemistry II",
            "CEV 212 Çevre Kimyası Laboratuvarı II",
            "CEV 219 Ekoloji",
            "MEK 215 Statik ve Mukavemet",
            "MEK 215 Statics and Strength of Materials",
            "NUM 202 Lineer Cebir ve Sayısal Yöntemler",
            "NUM 202 Linear Algebra and Numerical Methods",
            "TAR 165 Atatürk İlkeleri ve İnkılap Tarihi I",
            "TAR 166 Atatürk İlkeleri ve İnkılap Tarihi II"
            ];
            break;

        case "3" :
            var arr=[
            "CEV 305 Temel İşlemler ve Süreçler I",
            "CEV 305 Unit Operations and Processes I",
            "CEV 310 Su ve Toprak Kirliliği",
            "CEV 313 Unit Operations and Processes Laboratory I",
            "INS 308 Hidroloji",
            "INS 308 Hydrology",
            "MEK 315 Akışkanlar Mekaniği",
            "CEV 312 Su Temini ve Atıksu Uzaklaştırma",
            "CEV 314 Unit Operations and Processes Laboratory II",
            "CEV 316 Hava Kirliliği",
            "CEV 316 Air Pollution",
            "CEV 324 Temel İşlemler ve Süreçler II",
            "IST 201 İstatistik",
            "TER 403 Termodinamik"
            ];
            break;

        case "4":
           var arr=[
            "CEV 421 Katı Atık Yönetimi",
            "CEV 427 Air Pollution Control",
            "CEV 445 Çevre Modelleme",
            "CEV 445 Environmental Modeling",
            "CEV 447 Atıksu Mühendisliği",
            "CEV 447 Wastewater Engineering",
            "CEV 438 Çevre Yönetimi",
            "CEV 442 Tehlikeli Atık Yönetimi",
            "CEV 449 Çevre Mühendisliğinde Bitirme Projesi I",
            "CEV 450 Çevre Mühendisliğinde Bitirme Projesi II",
            "ISG 401 İş Sağlığı ve Güvenliği I",
            "ISG 402 İş Sağlığı ve Güvenliği II",
            "CEV 453 Çevre Etiği ve Çevre Mühendisliği",
            "CEV 315 Biyoremediasyon Teknolojileri",
            "CEV 317 Tarımsal Çevre Kirliliği",
            "CEV 326 Çevre Mühendisliğinde Bilişim Teknolojileri",
            "CEV 320 Enerji Üretiminden Kaynaklanan Çevre Sorunları",
            "CEV 336 Çevre Sağlığı",
            "CEV 340 Çevresel İstatistik Analizi Uygulamaları",
            "MUH 302 Disiplinlerarası Uygulamalar",
            "CEV 423 Çevre Bilimlerinde Uzaktan Algılama ve CBS Uygulamaları",
            "CEV 431 Su Arıtımı Projesi",
            "CEV 457 Mühendislik Bilimlerinde Bilgisayar Destekli Haritalama",
            "CEV 461 Yeşil Mühendislik Tasarımı ve Sürdürülebilirlik",
            "CEV 469 Membran Sistemleri ve Süreçleri Kulla. Su ve Atıksu Arıtımı",
            "CEV 471 Gürültü Kirliliği ve Kontrolü",
            "CEV 475 Çevre Mevzuatı I",
            "CEV 484 Küçük Ölçekli Atıksu Arıtım Sistemleri",
            "CEV 492 Hava Kalitesi Yönetimi Projesi",
            "CEV 328 Instrumental Analysis in Environmental Studies",
            "CEV 408 Su Kalitesi Değerlendirilmesi",
            "CEV 432 Atıksu Arıtımı Projesi",
            "CEV 443 Suların Yeniden Kullanımı",
            "CEV 444 Katı Atık Yönetimi Projesi",
            "CEV 462 Bilgisayar Destekli Mühendislik Tasarımı",
            "CEV 465 Arıtma Çamurlarının Arıtımı ve Bertarafı",
            "CEV 466 Ekolojik Planlama ve Ekoteknoloji",
            "CEV 467 Environmental Exposure Assessment",
            "CEV 468 Havza Yönetimi",
            "CEV 476 Çevre Mevzuatı II",
            "CEV 480 Hava Kirliliği Meteorolojisi ve Atmosferik Dağılım",
            "CEV 482 Hava Kirliliği Laboratuvarı",
            "CEV 486 Endüstriyel Atıksu Arıtımı",
            "CEV 490 Su ve Atıksuların İleri Arıtımı II",
            "CEV 494 Çevre Denetimi",
            "CEV 496 Mikrobiyolojik Arıtım Yöntemleri"
            ];
            break;
        }
                }   
                else if(a==="civil")
                {
                    {switch (b) {
        case "1" :
           var arr=[
            "FIZ105 Physics I",
            "FIZ 107 Physics Laboratory I",
            "ING 250 Reading and Speaking in English",
            "INS 101 Introduction to Civil Engineering",
            "KIM 113 General Chemistry",
            "KIM 115 General Chemistry Laboratory",
            "MAT 805 Calculus I",
            "TÜR 125 Turk Dili I",
            "BIL 810 Computer Applications in Civil Engineering",
            "FIZ 106 Physics II",
            "FIZ 108 Physics Laboratory II",
            "ING 360 English for Business",
            "MAT 806 Calculus II",
            "TRS 110 Technical Drawing in Civil Engineering",
            "TUR 126 Turk Dili II"
            ];
            break;

        case "2" :
            var arr=[
            "IST 201 Statistics",
            "MAT 219 Differential Equations",
            "NUM 202 Linear Algebra and Numerical Methods",
            "MEK 201 Statics",
            "INS 241 Materials Science in Civil Engineering",
            "INS 239 Law and Ethics in Civil Engineering",
            "TAR 165 Atatürk İlkeleri ve İnkılap Tarihi I",
            "IKT 356 Engineering Economics",
            "MEK 206 Dynamics",
            "MEK 212 Strength of Materials I",
            "MLZ 204 Materials of Construction",
            "INS 246 Computer Programming in Civil Engineering",
            "TAR 166 Atatürk İlkeleri ve İnkılap Tarihi II",
            "INS 240 Hydrology"
            ];
            break;

        case "3" :
            var arr=[
            "MEK 307 Fluid Mechanics",
            "INS 315 Soil Mechanics I",
            "INS 317 Soil Mechanics Laboratory",
            "INS 311 Transportation Engineering I",
            "INS 312 Construction Engineering and Management",
            "INS 307 Structural Analysis I",
            "INS 320 Steel Structures",
            "INS 342 Foundation Engineering I",
            "INS 302 Reinforced Concrete I",
            "INS 322 Hydraulics"
            ];
            break;

        case "4":
           var arr=[
            "INS 417 Design Project",
            "INS 415 Special Topics in Civil Engineering",
            "ISG 401 İş Sağlığı ve Güvenliği I",
            "INS 414 Applications of Design in Civil Engineering",
            "ISG 402 İş Sağlığı ve Güvenliği",
            "BIL 473 Foundation Engineering and Computer Applications",
            "INS 401 Reinforced Concrete Project",
            "INS 407 Reinforced Concrete II",
            "INS 409 Pavement Design",
            "INS 411 Transportation Engineering II",
            "INS 451 Geographic Information Systems (GIS) Applications in Hydrology and Hydraulics",
            "INS 452 Computer Applications in Hydrology and Hydraulics",
            "INS 453 Railway Engineering",
            "INS 454 Earthquake Analysis of Structures",
            "INS 455 Highway Design",
            "INS 456 Ground Water Hydrology",
            "INS 457 Construction Cost Design",
            "INS 458 Testing of Concrete",
            "INS 459 Geotechnical Design",
            "INS 460 Admixture for Concrete",
            "INS 461 Structural Design for Reinforced Concrete Buildings",
            "INS 462 Properties of Fresh and Hardened Concrete",
            "INS 463 Hydraulic Design",
            "INS 464 Concrete Durability",
            "INS 465 Steel Structural Design",
            "INS 466 Steel Structure Project",
            "INS 467 Construction Equipments",
            "INS 468 Computer-Based Project Management",
            "INS 469 Renewable Energy With Water, Wind and Wave Power",
            "TOP 102 Surveying",
            "INS 492 Water Resources Engineering",
            "INS 470 Concrete Technology",
            "INS 472 Introduction Traffic Engineering",
            "INS 474 Tunnels",
            "INS 476 Project Planning with Primavera and MS Project",
            "INS 478 Construction Cost Analysis and Estimating",
            "INS 480 Concrete Making Materials",
            "INS 481 Soil Mechanics II",
            "INS 482 Ground Improvement",
            "INS 483 Retaining Structure",
            "INS 484 Foundation Engineering II",
            "INS 485 Irrigation and Drainage",
            "INS 486 Introduction to Soil Dynamics",
            "INS 487 Water Structures",
            "INS 488 Enviromental Geotechnology",
            "INS 489 Open Channel Hydraulics",
            "INS 490 Coastal and Port Engineering",
            "INS 310 Water Supply and Sewerage",
            "INS 494 Civil Engineering Construction",
            "INS 495 Highway Pavements",
            "INS 496 Construction Planning and Management",
            "INS 498 Introduction to Structural Dynamics",
            "MEK 403 Strength of Materials II",
            "JEO 201 Engineering Geology",
            "MUH 302 Interdisciplinary Applications",
            "INS 471 Numerical Modeling in Hydrology and Hydraulics",
            "INS 314 Structural Analysis II"
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
       