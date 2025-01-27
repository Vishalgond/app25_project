<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="css/college-project.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
    integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="icon" href="image/emoji-ow.gif">
    <title>HyperInfoNet It Company</title>
</head>
<style>
* {
    margin: 0px;
    padding: 0px;
    box-sizing: border-box;
}

html {
    scroll-behavior: smooth;
}

@font-face {
    font-family: ubuntu;
    src: url('fonts/Ubuntu/Ubuntu-Regular.ttf');
}

@font-face {
    font-family: inter;
    src: url('fonts/Inter/Inter-Italic-VariableFont_opsz\,wght.ttf');
}

@font-face {
    font-family: raleway;
    src: url('fonts/Raleway/static/Raleway-Medium.ttf');
}

li {
    list-style: none;
}
a {
    text-decoration: none;
    color: #000000;
    line-height: 35px;
}

p {
    font-family: raleway;
    font-size: 17px;
    font-weight: 400;
    line-height: 20px;
    opacity: .8;
}

h1 {
    font-size: 56px;
    font-weight: 500;
    font-family: ubuntu;
}

h2 {
    font-size: 40px;
    font-weight: 500;
    font-family: ubuntu;
}

h3 {
    font-size: 28px;
    font-weight: 500;
    line-height: 40px;
    font-family: inter;
    color: var(--primary);
}

.read {
    color: var(--primary);
    font-size: 18px;
    font-weight: 600;
}

.read-secondary {
    color: var(--secondary);
    font-size: 18px;
    font-weight: 600;
}

:root {
    --primary:#9b55f4;
    --secondary: #e3f0f5;
    --ternury:#6998AB;
    --fourth:#406882;
    --fifth:#1b374d;
    --sixth:linear-gradient(#ADCBD7,#6998AB);
    --services:linear-gradient(#ADCBD7,#406882);
}
.button{
    background:linear-gradient(#9b55f4,#aeccd7);
}
.ABOUT-US-SECTION{
    min-height: 200PX;
    width:100%;
    display: flex;
    align-items: center;
    justify-content: center;
}
.about-us-start{
    min-height:300PX;
    width:100%;
    display: flex;
    align-items: center;
    justify-content: center;
    background: linear-gradient(45deg, black 0%, transparent 150%) ;
    /* background-color: var(--fifth); */
    color: #fff;
    /* text-transform: uppercase; */
    flex-direction: column;
    text-align: center;
    padding:100px; 
}
/* **************** */

/* *********** */
.why-choose-us{
    min-height: 200PX;
    width:100%;
    padding:40px;
    display: flex;
    align-items:flex-end;
    justify-content:space-between;
    /* background-color: var(--fifth); */
    background: linear-gradient(45deg, black 0%, transparent 150%) ;
    border: 1px solid;
  
}
.why-us{
    width:50%;
    min-height: 200PX;
    padding:0px,20px;
    display: flex;
    align-items:flex-end;
    justify-content:space-between;
    /* background-color: #aeccd7; */
    color: #fff;
}
.why-us-img{
    height:500px;
    width:600px;
}
.why-us-img img{
    height:100%;
    width:100%;
}
.why-us-content-outer{
    display: flex;
    align-items:center;
    justify-content:center;  
    flex-direction: column;
    background-color: var(--fifth);
    background: linear-gradient(45deg, black 0%, transparent 150%) ;
}
.why-us-content{
    min-height: 115PX;
    width:100%;
    padding-bottom:20px;
    display: flex;
    align-items: center;
    justify-content:flex-start;  
    border-bottom: 1px solid #ccc;
}
.headpara{
    display: flex;
    align-items:flex-start;
    justify-content:flex-start; 
    flex-direction: column;
}
.about-logo{
    height: 100PX;
    width:16%;
    /* border:1px dotted #ccc; */
    display: flex;
    align-items:center;
    justify-content:flex-start; 
 
}
.about-logo-img{
    height: 70PX;
    width:70px;
    background-color: #ccc; 
    border-radius: 50%;
}
.about-logo-img img{
    height: 100%;
    width:100%;
}
.about-text{
    height: 110PX;
    width:90%;
    /* border: 1px solid red; */
    display: flex;
    align-items:flex-start;
    justify-content:space-between;
    flex-direction: column;
}
.about-text p{
    font-size: 18px;
}

/* ***************** */
.what-we-are{
    min-height: 600PX;
    width:100%;
    display: flex;
    padding: 20px 0px;
    justify-content: center;
}
.what-we-are-inner{
    min-height:600PX;
    width:95%;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content:space-evenly;
    position: relative;
    object-fit: contain;  
}
.about-heading-main {
    min-height: 250px;
    width: 100%;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.client-up {
    width: 100%;
    display: flex;
    padding: 90px 0px;
}
.client-up-left {
    min-height: 100px;
    width: 50%;
    display: flex;
    flex-direction: column;
    justify-content: flex-start;
    padding: 0px 10px;
}
.client-up-left span{
    color: var(--primary);
    font-size: 20px;
    font-weight:600;
}
.client-up-right {
    min-height: 100px;
    width: 50%;
    display: flex;
    justify-content: center;
}

.client-down {
    min-height: 250px;
    width: 100%;
    display: flex;
    justify-content: space-between;
}
.what-we-are-inner img{
height:500px;
width:1300px;
display: flex;
    align-items: center;
    position: absolute;
    justify-content:space-evenly;
}
.what-we-are-inner1{
    min-height:400PX;
    width:45%;
    display: flex;
    align-items: center;
    justify-content: space-between;
    text-transform: uppercase;  
    transition: all ease 2s;
}
.what-we-are-inner1:hover .what-we-are-img1-bottom {
 transform: rotateY(360deg);
 transition: all ease 1s;
}
.what-we-are-img1{
    min-height:400PX;
    width:48%;
    display: flex;
    align-items: center;
    justify-content: space-between;
    flex-direction: column;
    text-transform: uppercase;
    position: relative; 
}
.what-we-are-img1-top{
    height:300PX;
    width:250px;
    display: flex;
    align-items:flex-start;
    justify-content:center;
    background-color: #1b374d;
}
.what-we-are-img1-top img{
    height:300PX;
    width:250px;
    opacity: .5;
}
.what-we-are-img1-bottom{
    min-height:170PX;
    width:170px;
    display: flex;
    align-items: center;
    justify-content:center;
    flex-direction: column;
    border-radius: 50%;
    position: absolute;
    bottom:3px;
    left: 180px;
    background-color: var(--ternury);
    color: #fff;
    outline: 3px solid #fff;
    z-index: 10;
}
.what-we-are-img2{
    min-height:400PX;
    width:48.5%;
    display: flex;
    align-items: center;
    justify-content: space-between;
    flex-direction: column;
    gap: 20px;
    /* border: 1px solid; */
    text-transform: uppercase;  
   
}
.what-we-are-img2-bottom{
    min-height:80PX;
    width:100%;
    display: flex;
    align-items:center;
    justify-content: space-around;
    background: var(--fifth);
    color: #fff;
} 
.what-we-are-img2-bottom i{
  color:var(--ternury);;
    outline: 2px solid #fff;
    transition: all ease 2s;
    border-radius: 50%;
    padding: 5px;
}
.what-we-are-inner1:hover .what-we-are-img2-bottom i{
    transform: rotateY(360deg);
    color: #fff;
    outline: 2px solid var(--ternury);
   }
.what-we-are-img2-bottom i,.what-we-are-img1-bottom i{
font-size: 37px;
transition: all ease 1s;
}
.last{
    width:53%;
    display: flex;
    align-items:flex-start;
    justify-content:flex-start;  
    flex-direction: column;
    text-transform: none;
    gap: 10px;
}
.last i{
    color: var(--ternury);
}
.last a{
    padding: 5px 15px;
    font-size: 16px;
    border: none;
    margin-top: 10px;
    transition: ease-in-out 0.5s;
    /* border:5px inset var(--ternury); */
    font-weight: bolder;
    color:var(--ternury);
    border-radius: 8px;
    animation:button 2s infinite;
}
@keyframes button {
    from {
        border-top:5px inset red;
       
    }
  
    to {
        border-top:5px inset blueviolet;
    /* transition: all ease 1s; */
    }
}
.last a::before{
    content: " ";
border: 2px double red;
height: 10px;
}
/* about us end  */

/* footer start */
.footer{
min-height:300px;
width: 100%;
border:1px solid;
display: flex;
justify-content: center;
align-items: center;
background: linear-gradient(45deg, black 0%, transparent 150%) ;
margin-top: 80px;
background-blend-mode: revert;

color: #fff;

}
.footer-outer{
    min-height:250px; 
    width: 80%;
    /* border:1px solid; */
    display: flex;
    /* box-shadow: 2px 2px 65px 14px #ccc; */
    flex-direction: column;
    align-items: center;
    justify-content: center;
}
 .footer-inner{
    min-height:70px;
    width: 100%;
    /* border:1px solid; */
    display: flex;  
    justify-content:center;
    gap:20px;
    align-items: center;
}
.footer-inner-icon{
    height:45px;
    width: 45px;
    border:1px solid;
    display: flex;
    justify-content: center;
    align-items: center;
    font-weight: bolder;
    font-size: 25px;
    background-color:#fff;
    border-radius: 8px;
    transition: all ease 2s;
    box-shadow: 1px 1px 3px 1px black;
} 
.footer-inner-icon i{
    transition: all ease 1s;  
}
.footer-inner-icon:hover{
    transform: rotate(45deg);
}
.footer-inner-icon:hover i{
     transform: rotate(-45deg) ;
     color: var(--ternury);
}

.footer-anchor a{
    color: #fff;
    font-size: 23px;
    text-shadow: 2px 2px 3px black;  
}
.footer-anchor a:hover{
    color: var(--ternury);
}
.Copyright{
    align-items: flex-end;
}
.Copyright a{
    color: #fff;
    font-size: 18px;
}

</style>
<body>
    <!-- about -us start -->
    <section class="ABOUT-US-SECTION">
<div class="about-us-start"><h1>About - Us</h1>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam, quasi cupiditate culpa ab doloribus distinctio incidunt consequatur vel maxime fuga nam impedit aut quis blanditiis rerum, libero facilis ex quisquam.</p></div>
    </section>