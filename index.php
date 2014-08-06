<?php 
if(isset($_POST['submit'])){
    $to = "dev@theyoungdeveloper.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $name = $_POST['name'];
    $subject = "Garden Feedback";
    $subject2 = "Copy of your Garden Feedback";
    $message = $name . " wrote the following:" . "\n\n" . $_POST['feedback'];
    $message2 = "Here is a copy of your message " . $name . ":\n\n" . $_POST['feedback'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Garden</title>
  <meta charset="utf-8">
  <meta name="description" content="The Young Developer">
  <meta name="author" content="Stuart Yamartino">

  <meta name="viewport" content="width=device-width, initial-scale=.7, user-scalable=no" />
  <link rel="shortcut icon" href="http://usegarden.com/favicon.ico?v=4" />

  <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
  <link href='http://fonts.googleapis.com/css?family=Merriweather:400,700' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="brain.css">
</head>
<body>
   
   <div id="top-body">
     <div class="container">
      <?php
        if(isset($_POST['submit']))
          echo '<div class="alert alert-success" style="margin-top:10px;text-align:center;" role="alert">Thank you for your feedback!</div>';
       ?>
       <img id="icon" src="icon.png" />
       <h1 class="title center-text">Garden</h1>
       <h2 class="center-text">Brainstorming Framework</h2>
       <h3 id="mantra" class="center-text">Plant. Weed. Grow.</h3>
      
        <section class="why">
           <h4 class="block b">What is the Garden Brainstorming Framework?</h4>
    Garden is a three step process to grow ideas based on years of experience designing products, user interfaces, software, and even companies themselves. It is based on three core steps: Plant, Weed, Grow.  
        </section>
        <br />
        <section class="manta-explained b">
        Start by stating your end goal: What do you want to accomplish/build/design/figure out?
        <br />
		1) Put every idea out there. No filter. There is no 'bad idea' - everything goes. 
        <br />
		2) Now look at each idea from Level 1, and start removing ideas that don't directly solve your original question/problem. 
        <br />
		3) Now figure out how to implement each idea. 
		* Pro tip: To figure out implementation details, try Gardening each one (your end goal is simply the idea that you are trying to implement).  
        <br />
       </section>
       <br />
       <section class="why">
         <h4 class="block b">Why use the Garden Brainstorming framework? </h4>
         It helps to figure out what works and what doesn't.
It is based on the concept that ideas lead to other ideas, and that nothing is built all at once: it is only through small iterations that we can actually create great things.  
 
       </section>
       <br />
       <section class="i">
         <span class="b">Pro Tip!</span> This is a framework that works for us; however, since the most important thing is to let your ideas flow freely, don't be afraid to modify and change this framework to make it suit your needs.
       </section>
       
       <!-- Button trigger modal -->
      <button id="feedback" class="btn btn-success btn-lg" data-toggle="modal" data-target="#myModal">
        What Do You Think?
      </button>
      
      <!-- Modal -->
      <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
              <h4 class="modal-title" id="myModalLabel">What Do You Think?</h4>
            </div>
            <div class="modal-body">
              <form role="form" method="post">
                <div class="form-group">
                  <label for="exampleInputEmail1">Email address</label>
                  <input name="email" type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Name</label>
                  <input name="name" type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Name">
                </div>
                <div class="form-group">
                  <label for="textarea">Feedback</label>
                  <textarea name="feedback" class="form-control" rows="6"></textarea>                
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button name="submit" type="submit" class="btn btn-success">Submit Feedback</button>
              </form>
            </div>
          </div>
        </div>
      </div>
     </div>
   </div>
     
    <div id="level0" class="outer-level">
       <section class="level container">
        <h2 class="head b center-text">LEVEL 0</h2>
        <h3 class="center-text i">Define the requirements</h3>
        <h4 class="essential"><span class="glyphicon glyphicon-star"></span>What is the core idea that you want to plant?</h4>
        <p class="well">
          <span class="glyphicon glyphicon-book"></span>
Before starting to Garden, you have to begin with a core concept/problem to solve. It must be stated in exactly one short sentence. This is absolutely critical because you will constantly refer back to this core goal/concept.  
Example: I want to build a house to fit three people and be environmentally friendly. 
        </p>
        
        <div class="row">
          <div class="col-md-6">
            <span class="glyphicon glyphicon-ok"></span><span class="b">Do:</span>
            <ul>
              <li>State your core concept in one sentence.</li>
            </ul>
          </div>
          <div class="col-md-6">
            <span class="glyphicon glyphicon-remove"></span><span class="b">Don't:</span>
            <ul>
              <li>Don't be too specific.</li>
            </ul>
          </div>
        </div>
      </section>
    </div>
    
    <div class="example">
      <div class="container">
        <h3>Example</h3>
        <h4>Level 0:</h4>
        <ul>
          <li>I want to build a new house. </li>
          <li>I want it to house/sleep three people comfortably. </li>
          <li>I want it to house 3 cars. </li>
        </ul>
      </div>
    </div>
     
   <div id="level1" class="outer-level">
     <section class="level container">
      <h2 class="head b center-text">LEVEL 1 | <span class="r">Plant</span></h2>
      <h3 class="center-text i">Every idea on the table</h3>
      <h4 class="essential"><span class="glyphicon glyphicon-star"></span>Ideas lead to ideas.</h4>
      <section class="i">
        <span class="b">Pro Tip!</span> First try doing level 1 Gardening individually, and then come together as a group. This is based on a significant amount of research showing that when each group member brainstorms individually beforehand, far more ideas can be generated than when brainstorming as a group.
      </section>
      <br />
      <p class="well">
        <span class="glyphicon glyphicon-book"></span>Level 1 is where you define your core requirements. Clearly and succinctly delineate what you want to end up with after Level 3. Be specific about general concepts, but vague about their implementation and specifics.
        <br /><br />
Level 1 is all about getting every possible idea on the table. It doesn't matter if the idea may never work or if the idea is only tangentially (or not even at all!) related to the core concept. The principle here is that all ideas are built on top of other ideas, so the more ideas - and the wilder the ideas are - the better! Write every idea down, so that you have a record of what you came up with for Level 2.

      </p>
      
      <div class="row">
        <div class="col-md-6">
          <span class="glyphicon glyphicon-ok"></span><span class="b">Do:</span>
          <ul>
            <li>Write everything down.</li>
            <li>Anything goes.</li>
            <li>First thought of an idea, say it.</li>
            <li>Explain what sparked that idea - retrace your steps and say what made you think of that idea.</li>
          </ul>
        </div>
        <div class="col-md-6">
          <span class="glyphicon glyphicon-remove"></span><span class="b">Don't:</span>
          <ul>
            <li>No bias.</li>
            <li>Don't mention other products that do the same thing.</li>
            <li>Don't dismiss any idea - no ideas are 'bad', all ideas are welcome.</li>
            <li>Don't filter whatsoever - doesn't matter if your idea might be 'stupid' or impossible or anything.</li>
          </ul>
        </div>
      </div>
    </section>
  </div>
  
  <div class="example">
    <div class="container">
      <h3>Example</h3>
      <h4>Level 1:</h4>
      <ul>
        <li>The house could have a dock for boats.</li>
        <li>The house could have an underground garage to save space.</li>
        <li>The house could have all LED lighting to save electricity and money.</li>
        <li>The house could be nuclear powered so it doesn't have to be connected to the grid.</li>
        <li>The house could be three stories tall (one story for each occupant).</li>
      </ul>
    </div>
  </div>
  
  <div id="level2" class="outer-level">   
    <section class="level container">
      <h2 class="head b center-text">LEVEL 2 | <span class="r">Weed</span></h2>
      <h3 class="center-text i">Narrow your search</h3>
      <h4 class="essential"><span class="glyphicon glyphicon-star"></span>Ideas need to be refined.</h4>
      <p class="well">
        <span class="glyphicon glyphicon-book"></span>
        Now that you have every conceivable possibility on the table, start to narrow those ideas down. The goal is to refine your original concept into its most succinct and simple essence.
        <br /><br />
        Analyze each idea and decide: Does it fit the core concept? Does it solve the original problem? Is it really needed now? Does it add complexity to the core concept, or is it a necessary piece of the core concept? Narrow down your massive list from Level 1 into a small core list of necessities to make the core concept work.
        <br /><br />
        Remember how we came up with our core requirements in Level 0? This is absolutely necessary, because every time you have a question about whether a Level 1 idea should be weeded or grown in Level 2, you go back to the core requirements and ask: does it fit the requirements? Is it consistent with the overall vision? 
      </p>
      
      <div class="row">
        <div class="col-md-6">
          <span class="glyphicon glyphicon-ok"></span><span class="b">Do:</span>
          <ul>
            <li>Give it a working name so you can talk about it! Spend no more than 30 seconds coming up with this.</li>
            <li>Weed out ideas that don't help the core concept.</li>
          </ul>
        </div>
        <div class="col-md-6">
          <span class="glyphicon glyphicon-remove"></span><span class="b">Don't:</span>
          <ul>
            <li>Don't worry about implementation details.</li>
            <li>Don't be afraid of imperfection - you just want to develop a starting point here, not the final perfect result. Remember: ideas lead to ideas.</li>
          </ul>
        </div>
      </div>
    </section>
  </div>
    
  <div class="example">
    <div class="container">
      <h3>Example</h3>
      <h4>Level 2:</h4>
      <ul>
        <li>The house could have a dock for boats.</li>
        <ul>
          <li>Probably not, because the core requirements don't specify anything about boats, so adding a boat dock would only serve to unnecessarily complicate things.</li>
        </ul>
        <li>The house could have an underground garage to save space.</li>
        <ul>
          <li>Could be expensive/impractical to build this, but since we need a 3 car garage, this may be necessary if there isn't enough space on the property.</li>
        </ul>
        <li>The house could have all LED lighting to save electricity and money.</li>
        <ul>
          <li>That would fit the requirements and would probably be a good idea based on the current market trends.</li>
        </ul>
        <li>The house could be nuclear powered so it doesn't have to be connected to the grid.</li>
        <ul>
          <li>This would likely be cost prohibitive, but it's a good jumping off point.</li>
        </ul>
        <li>The house could be three stories tall (one story for each occupant).</li>
        <ul>
          <li>This could work, though we should look into building codes for the area to see if it is possible to build a three story building. Also, do we need each floor to be dedicated to a particular person? Or could we break up the floors in a different way?</li>
        </ul>
      </ul>
    </div>
  </div>
     
  <div id="level3" class="outer-level">
    <section class="level container">
      <h2 class="head b center-text">LEVEL 3 | <span class="r">Grow</span></h2>
      <h3 class="center-text i">Build on the core idea</h3>
      <h4 class="essential"><span class="glyphicon glyphicon-star"></span>Build on the specific core idea.</h4>
      <p class="well">
        <span class="glyphicon glyphicon-book"></span>Level 3 is where we take the core ideas from Level 2 and start to figure out how to actually implement them. What does the idea look like? How does the idea work?
      </p>
      
      <div class="row">
        <div class="col-md-6">
          <span class="glyphicon glyphicon-ok"></span><span class="b">Do:</span>
          <ul>
            <li>Implementation details. How is it actually going to work? What does it look like?</li>
            <li>Get specific.</li>
          </ul>
        </div>
        <div class="col-md-6">
          <span class="glyphicon glyphicon-remove"></span><span class="b">Don't:</span>
          <ul>
          </ul>
        </div>
      </div>

     </section>
   </div>
   
   <div class="example">
    <div class="container">
      <h3>Example</h3>
      <h4>Level 3:</h4>
      <ul>
        <li>The house could have a dock for boats.</li>
        <ul>
          <li>Let's remove this, because we don't even know if the house will be near water!</li>
        </ul>
        <li>The house could have an underground garage to save space.</li>
        <ul>
          <li>How will the underground garage work? What companies manufacture them? Are there contractors in the area who have the knowledge and experience to install one?</li>
        </ul>
        <li>The house could have all LED lighting to save electricity and money.</li>
        <ul>
          <li>How much will this cost? Is there a contractor who can install it? What brand of LED lights to use? Will this change the electrical/power requirements of the house?</li>
        </ul>
        <li>The house could be nuclear powered so it doesn't have to be connected to the grid.</li>
        <ul>
          <li>This would likely be cost prohibitive, but it's a good jumping off point.</li>
          <li>Perhaps we can look at this idea again but with solar panels instead of nuclear power.</li>
        </ul>
        <li>The house could be three stories tall (one story for each occupant).</li>
      </ul>
    </div>
  </div>
   
<!--
  <div id="example" class="outer-level">
    <section class="level container">
      <h2 class="head b center-text">Example</h2>
      <h3 class="center-text i"><span class="glyphicon glyphicon-home"></span>Building a House</h3>
      <p>
        <h4>Level 0:</h4>
        <ul>
          <li>I want to build a new house. </li>
          <li>I want it to house/sleep three people comfortably. </li>
          <li>I want it to house 3 cars. </li>
        </ul>
        
        <h4>Level 1:</h4>
        <ul>
          <li>The house could have a dock for boats.</li>
          <li>The house could have an underground garage to save space.</li>
          <li>The house could have all LED lighting to save electricity and money.</li>
          <li>The house could be nuclear powered so it doesn't have to be connected to the grid.</li>
          <li>The house could be three stories tall (one story for each occupant).</li>
        </ul>
        
        <h4>Level 2:</h4>
        <ul>
          <li>The house could have a dock for boats.</li>
          <ul>
            <li>Probably not, because the core requirements don't specify anything about boats, so adding a boat dock would only serve to unnecessarily complicate things.</li>
          </ul>
          <li>The house could have an underground garage to save space.</li>
          <ul>
            <li>Could be expensive/impractical to build this, but since we need a 3 car garage, this may be necessary if there isn't enough space on the property.</li>
          </ul>
          <li>The house could have all LED lighting to save electricity and money.</li>
          <ul>
            <li>That would fit the requirements and would probably be a good idea based on the current market trends.</li>
          </ul>
          <li>The house could be nuclear powered so it doesn't have to be connected to the grid.</li>
          <ul>
            <li>This would likely be cost prohibitive, but it's a good jumping off point.</li>
          </ul>
          <li>The house could be three stories tall (one story for each occupant).</li>
          <ul>
            <li>This could work, though we should look into building codes for the area to see if it is possible to build a three story building. Also, do we need each floor to be dedicated to a particular person? Or could we break up the floors in a different way?</li>
          </ul>
        </ul>
        
        <h4>Level 3:</h4>
        <ul>
          <li>The house could have a dock for boats.</li>
          <ul>
            <li>Let's remove this, because we don't even know if the house will be near water!</li>
          </ul>
          <li>The house could have an underground garage to save space.</li>
          <ul>
            <li>How will the underground garage work? What companies manufacture them? Are there contractors in the area who have the knowledge and experience to install one?</li>
          </ul>
          <li>The house could have all LED lighting to save electricity and money.</li>
          <ul>
            <li>How much will this cost? Is there a contractor who can install it? What brand of LED lights to use? Will this change the electrical/power requirements of the house?</li>
          </ul>
          <li>The house could be nuclear powered so it doesn't have to be connected to the grid.</li>
          <ul>
            <li>This would likely be cost prohibitive, but it's a good jumping off point.</li>
            <li>Perhaps we can look at this idea again but with solar panels instead of nuclear power.</li>
          </ul>
          <li>The house could be three stories tall (one story for each occupant).</li>
        </ul>
      </p>

     </section>
   </div>
-->
   
  <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
  <script src="https://netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
</body>
</html>