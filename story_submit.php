<?php include "header.php"; ?>
        <form name="StorySubmission" method="post" action="results.php">
            
            <!-- User information -->
            <fieldset id="user_info">
              <legend>User Information</legend>
              <label for="fname">First Name:*</label>
                <input type="text" id="fname" name="first_name" placeholder="First" size="8" required/>
              <label for="lname">Last Name:*</label>
                <input type="text" id="lname" name="last_name" placeholder="Last" size="8" required />
                <br>
              <label for="email">Email:*</label>
              <input type="email" id="email" name="email" placeholder="story@example.com" required />
                 <br>
              <input type="checkbox" id="show_email" name="show_email" value="show_email"/>
                    <label for="show_email">Share Email with Users?</label><br> 
              <label for="position">Position*</label><br>
              <select name="position" id="position" required>
                  <option value="1">Teacher</option>
                  <option value="2">Rebbi</option>
                  <option value="3">Principal</option>
                  <option value="4">Parent</option>
                  <option value="5">Student</option>
                  <option value="6">Curriculum Coordinator</option>
                  <option value="7">Other</option>
              </select>
            </fieldset>
           
                
            <!-- Story information -->
            <fieldset id="story_info"> 
            <legend>Story Information</legend>
            
            <div id="title-and-story">
                <label for="title">Story Title:</label>
                <input type="text" name="title" id="title" value="" required/>
                    <br>
                <label for="story">Enter the story:</label>
                    <br>
                <textarea id="story" name="story" rows="5" cols="40" placeholder="Your story here:" required></textarea>
                    <br>
                
                <!--<label for="source">Where did you see this story?</label>
                <input type="text" name="source" id="source" />-->
            </div>
           
                
            <!-- Topics -->
            <div id="topics">
                <span>Choose which topics your story belongs to:</span><br>
                <input type="checkbox" id="gedolim" name="topic[]" value="gedolim" />
                    <label for="gedolim">Gedolim</label><br>
                <input type="checkbox" id="middos" name="topic[]" value="middos" />
                    <label for="middos">Middos</label><br>
                <input type="checkbox" id="ahavas_yisrael" name="topic[]" value="ahavas_yisrael" />
                    <label for="ahavas_yisrael">Ahavas Yisral</label><br>
                <input type="checkbox" id="chinuch" name="topic[]" value="chinuch" />             
                    <label for="chinuch">Chinuch</label><br>
                <input type="checkbox" id="torah" name="topic[]" value="torah" />                 
                    <label for="torah">Torah</label><br>
                <input type="checkbox" id="tefillah" name="topic[]" value="tefillah" />           
                    <label for="tefillah">Tefillah</label><br>
            </div> 
            </fieldset>
            
            <button type="submit" value="submit">Submit Story</button>
            
            
        </form>
    
<?php include "footer.php"; ?>


