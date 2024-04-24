
<!doctype html>
<html>
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Contact Us </title>
    <link rel="shortcut icon" type="image/jpg" href="/images/news2.png"/>
    <link rel="apple-touch-icon" sizes="180x180" href="vendors/images/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="vendors/images/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="vendors/images/favicon-16x16.png">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@800&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@900&display=swap');
    </style>
    <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <style>
            /* @import url('http://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800;900&display=swap'); */

*
{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins',sans-serif;
}

section
{
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    background-color: #e1e6f3;

}
section::before
{
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 50%;
    height: 100%;
    background: #e1e6f3;
}

.container
{
    position: relative;
    min-width: 1100px;
    min-height: 550px;
    display: flex;
    z-index: 1000;
    /* border-radius: 22px; */
    /* background-color: #fff; */

}

.container .contactInfo
{
    position: absolute;
    top: 40px;
    width: 350px;
    height: calc(100% - 80px);
    background: #095a55;
    z-index: 1;
    padding: 40px;
    display: flex;
    justify-content: center;
    flex-direction: column;
    justify-content: space-between;
    box-shadow: 0 20px 25px rgba(0,0,0,0.15);
    border-radius: 22px;
}

.container .contactInfo h2
{
    color: #fff;
    font-size:24px;
    font-weight: 500;
}

.container .contactInfo ul.info
{
   position: relative;
   margin: 20px 0;
}

.container .contactInfo ul.info li
{
   position: relative;
   list-style: none;
   display: flex;
   margin: 20px 0;
   cursor: pointer;
   align-items: flex-start;
}

.container .contactInfo ul.info li span:nth-child(1)
{
    width: 30px;
    min-width: 30px;
}

/* for gmail */
.container .contactInfo ul.info li span a
{
    color: #fff;
    text-decoration: none;
    width: 30px;
    min-width: 30px;

}

.container .contactInfo ul.info li span:nth-child(1) img
{
    max-width: 100%;
    filter: invert(1);
}

.container .contactInfo ul.info li span:nth-child(2)
{
    color: #fff;
    margin-left: 10px;
    font-weight: 300;
}

.container .contactInfo ul.sci
{
    position: relative;
    display: flex;
}

.container .contactInfo ul.sci li
{
   list-style: none;
   margin-right: 15px;
}

.container .contactInfo ul.sci li a
{
   text-decoration: none;
}

.container .contactInfo ul.sci li a img
{
   filter: invert(1);
}

.container .contactForm
{
    position: absolute;
    padding: 70px 50px;
    padding-left: 250px;
    margin-left: 150px;
    width: calc(100% - 150px);
    height: 100%;
    background: #fff;
    box-shadow: 0 50px 50px rgba(0,0,0,0.25);
    border-radius: 22px;
}

.container .contactForm h2
{
    color: #0f3959;
    font-size: 24px;
    font-weight: 500;
}

.container .contactForm .formBox
{
    position: relative;
    display: flex;
    justify-content: space-between;
    flex-wrap: wrap;
    padding-top: 30px;
}

.container .contactForm .formBox .inputBox
{
    position: relative;
    margin-bottom: 35px;
}

.container .contactForm .formBox .inputBox.w50
{
    width: 47%;
}

.container .contactForm .formBox .inputBox.w100
{
    width: 100%;
}

.container .contactForm .formBox .inputBox input,
.container .contactForm .formBox .inputBox textarea
{
    width: 100%;
    resize: none;
    padding: 5px 0;
    font-size: 18px;
    font-weight: 300;
    color: #333;
    border: none;
    outline: none;
    border-bottom: 1px solid #777;
}

.container .contactForm .formBox .inputBox textarea
{
    height: 120px;
}

.container .contactForm .formBox .inputBox span
{
    position: absolute;
    left: 0;
    padding: 5px 0;
    pointer-events: none;
    font-size: 18px;
    font-weight: 300;
    transition: 0.3s;
}

.container .contactForm .formBox .inputBox input:focus ~ span,
.container .contactForm .formBox .inputBox input:valid ~ span,
.container .contactForm .formBox .inputBox textarea:focus ~ span,
.container .contactForm .formBox .inputBox textarea:valid ~ span
{
    transform: translateY(-20px);
    font-size:  12px;
    font-weight: 400;
    letter-spacing: 1px;
    color: #095a55;
    font-weight: 500;
}

/* Css for the submit button */
.container .contactForm .formBox .inputBox input[type="submit"]
{
    position: relative;
    cursor: pointer;
    background: #095a55;
    border-radius: 20px;
    color: #fff;
    border: none;
    max-width: 150px;
    padding: 12px;

}

.container .contactForm .formBox .inputBox input[type="submit"]:hover{
    background: #0d9480;
}

/* make the form responsive */
@media (max-width: 1200px)
{
    .container
    {
        width: 90%;
        min-width: auto;
        margin: 20px;
        box-shadow: 0 20px 50px rgba(0,0,0,0.2);
    }

    .container .contactInfo
    {
        top: 0;
        height: 550px;
        position: relative;
        box-shadow: none;
        border-radius: 0px;
    }

    .container .contactForm
    {
        position: relative;
        width: calc(100% - 350px);
        padding-left: 0;
        margin-left: 0;
        padding: 40px;
        height: 550px;
        box-shadow: none;
        border-radius: 0px;
    }
}

@media (max-width: 991px)
{
    section
    {
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
        background: #fff38e;
    }

    section::before
    {
        display: none;
    }

    .container
    {
        display: flex;
        flex-direction: column-reverse;
    }

    .container .contactForm
    {
        width: 100%;
        height: auto;
        border-radius: 0px;
    }

    .container .contactInfo
    {
        width: 100%;
        height: auto;
        flex-direction: row;
        border-radius: 0px;
    }
    .container .contactInfo ul.sci
    {
       position: relative;
       display: flex;
       justify-content: center;
       align-items: center;
    }
}

@media (max-width: 600px)
{
    .container .contactForm
    {
        padding: 25px;
    }

    .container .contactInfo{
        padding: 25px;
        flex-direction: column;
        align-items: flex-start;
    }

    .container .contactInfo ul.sci
    {
        margin-top: 40px;
    }

    .container .contactForm .formBox .inputBox.w50
    {
        width: 100%;
    }
}
        </style>
        <section>
            <div class="container">
                <div class="contactInfo">
                    <div>
                        <img src={{asset("vendors/images/deskapp-logo.svg") }} alt="" class="dark-logo">
                        <h2>Contact Info</h2>
                        <ul class="info">
                            <li>
                                <span><img src=""></span>
                                <span>184 Ippokratous Street<br>
                                    Athens, Gr<br>
                                    11472</span>
                                </span>
                            </li>
                            <li>
                                <span><img src=""></span>
                                <!-- <span>nassosanagn@gmail.com</span> -->
                                <span><a href = "mailto: nassosanagn@gmail.com">nassosanagn@gmail.com</a></span>
                            </li>
                            <li>
                                <span><img src=""></span>
                                <span>702-279-3488</span>
                            </li>

                        </ul>
                    </div>
                    <ul class="sci">
                        <li><a href="https://www.facebook.com/nassosanagn/"><img src=""></a></li>
                        <li><a href="https://www.instagram.com/nassosanagn_/?hl=el"><img src=""></a></li>
                        <li><a href="https://twitter.com/nassosanagn"><img src=""></a></li>
                        <li><a href="https://www.linkedin.com/in/nassos-anagnostopoulos-2b9631196/"><img src=""></a></li>

                    </ul>
                </div>
                <form action="{{ route('contact.submit') }}" method="post">
                    @csrf
                    <div class="contactForm">

				@if (session('status'))
				<div class="alert alert-success">
					{{session('status')}}
				</div>
				@endif


				<ul>
				@foreach ($errors->all() as $error)
				<li class="alert alert-danger"> {{$error}}</li>
				@endforeach
				</ul>
                        <h2>Send a Message</h2>
                        <div class="formBox">
                        <div class="inputBox w50">
                            <input type="text" id="name" name="name" required>
                            <span>First Name</span>
                        </div>
                        <div class="inputBox w50">
                            <input type="text" required>
                            <span>Last Name</span>
                        </div>
                        <div class="inputBox w50">
                            <input type="email" id="email" name="email" required>
                            <span>Email Address</span>
                        </div>
                        <div class="inputBox w50">
                            <input type="text" required>
                            <span>Mobile Number</span>
                        </div>
                        <div class="inputBox w100">
                            <textarea id="message" name="message" required></textarea>
                            <span>Write your message here...</span>
                        </div>
                        <div class="inputBox w100">
                            <input type="submit" value="Send">
                        </div>

                    </div>
                </form>
                </div>
        </section>
    </body>
</html>
