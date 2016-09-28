  
<?php

// A simple web site in Cloud9 that runs through Apache
// Press the 'Run' button on the top to start the web server,
// then click the URL that is emitted to the Output tab of the console

?>
<div class="section"> 
 
  <div class="slider">
    <ul class="slides">
      <li>
       <!-- http://www.hiracle.net/img/software-development.png               https://scontent.xx.fbcdn.net/v/t1.0-9/12096400_1068591296485033_8814078671258494896_n.jpg?oh=de0882280bef4f5b497bffad85ae6c66&oe=5872A189-->
       
        <img src="images/background1.jpg"> <!-- random image -->
        
        <div class="caption center-align">
          <!--<h1 class="header center" >Serigne Lo</h1>-->
          <div class="row center">
        	<h5 class="header col s12">Application Software Development<b></h5>
        	<h5 class="header col s12">SUNY College of Technology</h5>
        	<h5 class="header col s12">Alfred, NY</h5>
        	
        </div>
        <div class="row center">
        	<a href="#projects" class="btn-large wave-effect blue-grey darken-4">more about me</a>
        </div>
        </div>
      </li>
      
    </ul>
  </div>
  
  <div class="section">
  <h4 class="caption center-align" id="projects">Projects/Skills</h4>
  
  <div class="row">
        <?php $xml=simplexml_load_file("projects.xml") or die("Error: Unfortunately we cannot create the object");?>
        <?php foreach ($xml->children() as $quotes) : ?>
            <div class="col s12 m6">

                <div class="card">
                     <div class="card-image waves-effect waves-block waves-light">
                      <img style="height: 150px;" class="activator" src="<?php echo $quotes->image; ?>">
                    </div>
                    <div class="card-content">
                      <span class="card-title activator grey-text text-darken-4"><?php echo $quotes->name; ?><i class="material-icons right">more_vert</i></span>
                      <p><a class="activator" href="#">Click me</a></p>
                    </div>
                    <div class="card-reveal">
                      <span class="card-title grey-text text-darken-4"> <?php echo $quotes->name; ?><i class="material-icons right">close</i></span>
                      <p><?php echo $quotes->description; ?></p>
                      
                    </div>
                    
                    
                    </div>
            </div>
        <?php endforeach; ?> 
        </div>
 

  <h4 class="caption center-align" id="work_experience">Work Experiance</h4>
  <ul class="collection">
    <li class="collection-item avatar">
      <img src="https://www.alfred.edu/gallery/images/image1_big.jpg" alt="" class="circle">
      <span class="title">Web Programmer</span>
      <p>Alfred University, <br>
         Alfred, NY<br>
         May 2016 - Present
         
      </p>
      <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
    </li>
    <li class="collection-item avatar">
      <img src="http://cdn.stateuniversity.com/assets/logos/images/1575/large_Walter_C._Hinkle_Memorial_Library.jpg" alt="" class="circle">
      <span class="title">Library Assistant </span>
      <p>Hinkle Memorial Library <br>
         Alfred, NY<br>
         September 2016 - Present
      </p>
      <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
    </li>
    <li class="collection-item avatar">
      <img src="http://www.nationalelectronicsusa.com/images/slide-cis1.jpg" alt="" class="circle">
      <span class="title">Sales Assistant </span>
      <p>National Electronics Inc. <br>
         New York, NY<br>
         September 2011 - August 2013
      </p>
      <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
    </li>
  </ul>
  
  
   <h4 class="caption center-align" id="contact_me">Contact me</h4>
  
  
  <div class="row">
    <form class="col s12"name="contactform" method="POST" action="model/contact_form.php">
      <div class="row">
        <div class="input-field col s6">
          <i class="material-icons prefix">account_circle</i>
          <input id="icon_prefix" type="text" class="validate" name="full_name">
          <label for="icon_prefix">Full Name</label>
        </div>
        
      
        <div class="input-field col s6">
          <input id="email" type="email" class="validate" name="email">
          <label for="email">Email</label>
        </div>
        
        
      </div>
      
      <div class="row">
        <div class="input-field col s12">
          <i class="material-icons prefix">mode_edit</i>
          <textarea id="icon_prefix2" class="materialize-textarea" name="comments"></textarea>
          <label for="icon_prefix2">Message</label>
        </div>
      </div>
      
      <button type="submit" class="btn btn-primary center-align blue-grey darken-4">Send Message</button>
    </form>
  </div>
  
  
  </div>
            
 </div>
