<?php include 'header.php'?>
<div class="container">
   <form method="post" action="form.php">
    <div class="row col-10" id="data">
            <div class="col-md-5 offset-3">
               <label>Select Letter Type:</label>
                <select name="letter" id="letter">
                    <option value="Transfer Letter">Transfer Letter</option>
                    <option value="Leave Letter">Leave Letter</option>
                </select><br><br> 
                
                  <script type="application/javascript">
                $(document).ready(function(){
                   $("#letter").change(function(){
                      $("#tt,#tf").prop('disabled',$(this).val() == "Leave Letter");
                   });
                });
                
                </script>  
            <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">Name</span>
                  </div>
                  <input name="name" type="text" class="form-control" placeholder="Enter your name" aria-label="name" aria-describedby="basic-addon1" required>
            </div>
            <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">Staff ID</span>
                  </div>
                  <input name="ID" type="text" class="form-control" placeholder="Enter your staff ID" aria-label="Username" aria-describedby="basic-addon1" required>
            </div>
             <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">Profession</span>
                  </div>
                  <input name="prof" type="text" class="form-control" placeholder="Profession" aria-label="prof" aria-describedby="basic-addon1"  required>
            </div>
             <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">Transfer From</span>
                  </div>
                  <input id="tf" name="tf" type="text" class="form-control" placeholder="Transfer From" aria-label="tf" aria-describedby="basic-addon1"  required>
                  
            </div>
            <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">Transfer To</span>
                  </div>
                  <input id="tt" name="tt" type="text" class="form-control" placeholder="Transfer To" aria-label="tf" aria-describedby="basic-addon1"  required>
                </div>
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">Effect From</span>
                  </div>
                  <input name="efd" type="date" class="form-control" placeholder="Enter date" aria-label="date" aria-describedby="basic-addon1"  required>
            </div>
            <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">Letter Date</span>
                  </div>
                  <input name="date" type="date" class="form-control"  aria-label="date" aria-describedby="basic-addon1"  required>
            </div>
              
            <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">Title</span>
                  </div>
                <textarea name="title" class="form-control" name="ID" type="date" placeholder="Enter the title of the letter, example TRANSFER OF" aria-label="Title" aria-describedby="basic-addon1"  required></textarea>
            </div>
              <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">Address</span>
                  </div>
                <textarea name="address" class="form-control" placeholder="Main Address" aria-label="address" aria-describedby="basic-addon1"  required></textarea>
            </div>
              <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">Issued By</span>
                  </div>
                <input name="isb" type="text" class="form-control" placeholder="Letter issued by" aria-label="for" aria-describedby="basic-addon1"  required>
            </div>
              <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">For:</span>
                  </div>
                <input name="for" type="text" class="form-control" placeholder="Position of the recipient" aria-label="for" aria-describedby="basic-addon1"  required>
            </div>
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">CC:</span>
                  </div>
                <input name="cc" type="text" class="form-control" placeholder="Address To" aria-label="cc" aria-describedby="basic-addon1"  required>
            </div>
               <input name="download" type="submit" Value="Download Letter " class="btn btn-primary">
            </div>
            
        </div>
        
        </form>
    </div>




