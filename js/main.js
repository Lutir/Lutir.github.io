            var isFullscreen = false;
            
            let data = [
                {
                    'name': 'Software Engineer Intern @Yocket',
                    'logo': 'img/yocket.png',
                    'content': ["Built the <b>Design Language</b> for the portal; a unified SASS Framework with all the frequently used components, which allowed faster development of components and is used extensively by other developers.", "Developed a CRM internal tool for the Management team which has functionalities to log email, call and text conversations which are used to track the progress and applications of a lead.","Devised a <b>recommendation system</b> that had the data of the candidates collected over the past 3 years, as a feature vector, which predicted a certain list of universities based on the student profile; Helping the candidate shortlist the schools for their further education","<b>Technologies Stack :</b> Vue.js, CakePHP, Google Firebase, Git"],
                    'duration': 'Jan 2019 - May 2019',
                    'link': 'https://yocket.in'
                },
                {
                    'name': 'Software Engineer Intern @Senov Tech',
                    'logo': 'img/senov.png',
                    'content': [
                        "Supervised the development of <b>DietKraft – a machine learning dietitian software</b>. DietKraft was a unified application which helped the doctors on their entire process; from managing patients to printing custom diet-charts.",
"I extracted the nutrition data for 2000+ food items using Beautiful soup to make a food-catalogue which was used to create diet charts, and modeled interface for the patient-dietitian interaction",
"<b>Technology Stack -</b> Laravel, React.js, Materialize.css."
                    ],
                    'duration': 'May 2018 - August 2018'
                },
                {
                    'name': 'Full Stack Developer Intern @Docbox',
                    'logo': 'img/docbox.png',
                    'content': ["Formulated and Engineered a CRM which bridged the gap between doctor and patient activities by letting the doctor manage their appointments, send prescriptions and provide online consultation to the patients.",
"I worked on optimizing and modified the existing mobile API’s which were used in the Android and IOS apps to provide cross-platform usage.",
"<b>Technologies Used -</b> Laravel, React.js, Node.js, Bootstrap, and PHP"],
                    'link': 'https://docbox.co.in',
                    'duration': 'May 2016 - August 2016',
                    'gray': true
                },
                {
                    'name': 'Software Engineer Intern @Hewlett Packard Enterprise',
                    'logo': 'img/hpe.svg',
                    'content': ["<b>HPE Synergy</b> combines storage, compute and network equipment in one chassis, along with management software that can quickly configure the hardware automatically to provide just the resources needed to run an application. Sounds cool right?","During my internship, I modelled an interface between the <b>composable infrastructure</b> of HPE Synergy and the end-users by allowing the user control the Synergy Block virtually.",
                    "Integrated Websockets and React.js and designed a unified API that handled functionalities like BIOS functioning, configuration management, etc for HPE Synergy architecture.",
                    "<b>Technologies Used -</b> React.js, Node.js, C++, Java Spring Framework, and Materialize.css"],
                    'duration': 'May 2017 - July 2017'
                },
                {
                    'name': 'Graduate Roommate Finder @Project',
                    'logo': 'https://icon-library.net/images/project-icon/project-icon-14.jpg',
                    'content': ['Every year <b>10000+ students</b> travel abroad for pursuing higher education. And once they reach their college, they start looking for roommates; for someone with which they can stay comfortably and adjust to the differences.', 
                    "The Graduate Roommate finder was an initiative which i started to help students in finding their roommates. It was a <b>3 step process</b> - <p class='grad-list'> 1. Student fills the <b>google form</b> with his basic preferences.</p>  <p class='grad-list'>2. In a few days, the student receives an <b>email</b> with the credentials to a web portal. </p><p class='grad-list'>3. After logging in to the portal, the students sets his preferences and gets a list of <b>recommended roommates</b> with matching preferences.</p>",
                    "Simple right! The user gets to choose and filter roommates based on <b>17 filters</b> like - Food Type, Cleaniness, Room Sharing type, Cooking skills and lot more.",
                    "The portal was launched for <b>6 universities</b> and was used by <b>2000+</b> students!"
                ],
                    'link': 'http://18.218.167.247',
                    'duration': 'May 2019 - August 2019'
                },
                {
                    'name': 'Top-N Music Recommendation System @Project',
                    'content': ['The explosive growth in the amount of available digital information and the number of visitors to the Internet have created a potential challenge of information overload which hinders timely access to items of interest on the Internet. Information retrieval systems, such as Google, DevilFinder and Altavista have partially solved this problem but prioritization and personalization of information were absent. This has increased the demand for recommender systems more than ever before. This served as the foundation of the project where we did a <b>comparative study on existing recommendation systems.</b>',
                "We compared the existing collaborative filtering techniques, content based techniques and the hybrid approach to solve the current problem on the <b>Million Song Dataset</b> which was available publicly.",
            "We developed a <b>factored item similarity model based recommendor</b> and tuned the parameters which performed better than the existing hybrid methods."],
                    'duration': 'Jan 2018 - May 2018'
                },
                {
                    'name': 'Dalal Street @Project',
                    'link': 'https://dalal.pragyan.org',
                    'content': ['Dalal Street is an online event which is organised as a part of Pragyan - The technical fest of NIT trichy.', 'It is an online stock trading platform where candidates participate and try to climb the leaderboard in a short span of 5-6 days.', 'The platform was developed using React.js and Websockets to ensure live updation of stock values. I worked on developing reactive components for the platform which were integrated to the backend using Go and Websockets.', '<b>Technology Stack -</b> React.js, Materialize.css'],
                    'duration': 'Jan 2017 - August 2017',
                    'gray': true
                },
                {
                    'name': 'Web Development Intern @Dipper Pvt Ltd',
                    'logo': 'img/dipper.jpg',
                    'link': 'http://usedipper.com',
                    'content': ["Worked on developing the complete website for the company. The website was aimed at bridging the gap between the Shippers and the Truckers involved in the Freight business.",
"Recommend changes to websites architecture, content, linking and other SEO related factors, Performing ongoing keyword research and on-page optimization.",
"<b>Technologies Used -</b> Ruby on Rails, Node.js, Bootstrap and a bit of Search Engine Optimization (SEO)"],
                    'duration': 'November 2016 - December 2016'
                },
                {
                    'name': 'Graduate Admissions Portal, Nit Trichy',
                    'logo': 'img/nitt_logo.png',
                    'link': 'https://admission.nitt.edu',
                    'content': ['This was one of the <b>biggest and challenging project</b> on which I have worked on. The task was to create an online portal for graduate admissions in National Institute of Technology, Trichy.', "Earlier, the entire process was a trivial paper based system where the applicants had to fill and courier their applications to the university, where the applications were read and classified and then sent to the respective head of the departments. As the number of applications started to increase, the manual work requirement increased and caused delay in the application phase, which led to the need of an online portal.", "The project was done under the supervision of the Director and Academic Dean of the institute as after several iterations made live for production. The portal is currently in use and helped <b>5000+ students</b> with their application process in the last 3 years!", "<b>Technology Stack -</b> Laravel, Materialize.css"],
                    'duration': 'Jan 2016 - August 2016'
                },
                {
                    'name': 'Computer Science Outreach, Dallas',
                    'logo': 'img/cs_outreach.png',
                    'content': ['I am organizing an <b>Coding Outreach Event</b> at Darthmouth Elementary School which is located in Richardson, Dallas. This is an after-school event for childrens who are interested in the field of CS and wanted to learn more about it.',
'Through a total of 8 workshops where we start of with the basics of <b>scratch programming language</b>, we intend on teaching students and progress them towards making a project using scratch!'],
                    'duration': 'September 2019 - current'
                },
                {
                    'name': 'National Service Scheme @Manager',
                    'logo': 'img/nss.jpeg',
                    'content': ['The National Service Scheme is an Indian government-sponsored public service program conducted by the Department of Youth Affairs and Sports of the Government of India.',
        'Led a group of NSS volunteers (Freshers, Sophomores) in organizing Plantation Drives, Blood Donation Camps, Orphanage Visits, Swachh Bharat rallies, Social awareness campaigns and Street Plays.'],
                    'duration': 'July 2016 - July 2017'
                },
                {
                    'name': 'DietKraft',
                    'content': ['<p><b>Here is a Short Story</b></p>After completing my Graduation, I finally came back home after 8 years of hostel life and was living with my family. At my home, I watched my mom (who is a Dietitian) struggle with managing Patients and their Diet Charts. While interning at Senov Tech, I got this great idea which led to the creation of DietKraft - A dietitian CRM which allows one to create Custom Dietcharts and Manage Patients through an online portal. I used Laravel and React.js to develop this amazing portal.When I was done with the portal, my mom started using the portal and loved it! She referred it to some of her old colleagues and it was a great hit! By the end of the month, I had 4 people using my Portal which I made as a pet-project to help my mom! Watching a project which I had created from scratch, being used by people in Real Life! That feeling was amazing.'],
                    'duration': 'June 2018 - September 2018',
                    'gray': true
                }
            ]
            
            $('.item').click(function(){

                let background = $(this).data('color');
                let id = $(this).data('id');
                console.log(background);
                $('.modal-head').text(data[id].name);
                $('.modal-content').text('');
                let animationSpeed = 100;
                if(data[id].gray)
                    $('.modal-content').append('<h1 class="dark" uk-scrollspy="cls: uk-animation-slide-bottom-small; repeat: true; delay: '+animationSpeed+'">What did I work on?</h1>');
                else
                    $('.modal-content').append('<h1 uk-scrollspy="cls: uk-animation-slide-bottom-small; repeat: true; delay: '+animationSpeed+'">What did I work on?</h1>');

                animationSpeed+=100;
                $('.modal-content').append('<ul class="uk-list uk-list-bullet">');
                (data[id].content).map((x)=>{
                    $('.modal-content').append('<li class="content-li" uk-scrollspy="cls: uk-animation-slide-bottom-small; repeat: true; delay: '+animationSpeed+'">'+x+'</li>');
                    animationSpeed += 100;
                })
                $('.modal-content').append('</ul>');

                // $('.modal-content').text(data[id].content);
                $('.modal-duration').text(data[id].duration);

                $('.modal-color').attr('class', 'uk-background-cover modal-color');
                $('.modal-color').addClass(''+background+'');

                if(data[id].link){
                    $('.modal-link-parent').show();
                    $('.modal-link').text(data[id].link);
                    $('.modal-link').attr('href', data[id].link);
                }
                else{
                    $('.modal-link-parent').hide();
                }

                if(data[id].logo){
                    $('.modal-logo').show();
                    $('.modal-logo').attr('src', data[id].logo);
                }
                else{
                    $('.modal-logo').hide();
                }


                UIkit.modal('#modal-full').show();

            });