<!DOCTYPE html>
<html>
<head>
  <title>Register</title>
  <style type="text/css">
    body{
    margin-top: 30px;
    margin-left: 10%;
    color:#262626;
    background-color:#eeeeee;
    font-family:sans-serif;
}

div.Maincontainer{
    border: 1px solid white;
    border-color: lightgoldenrodyellow;
    height: auto;
    width: 90%;
    background-color: white;
        
    
}

div.paragraph1{
    background-color:#eeeeee ;
    border:1px solid white;
    border-color: lightgray;
    padding-left: 10px;
    
}

p{
    line-height: 2.8;
    margin-left:10px;
}

.uploadpicButoon,.reviewBtn,.asClientBtn,.deleteBtn {
    width: auto;
    background-color: white;
    color: black;
    padding: 12px 20px;
    margin-left: 55px;
    border: 2px solid #4CAF50;
    border-radius: 4px;
    cursor: pointer;
}


div.profilepic{
    border:1px solid white;
    border-color: lightgray;
    padding:20px;
}


div.profession{
    border:1px solid white;
    border-color: lightgray;
    padding: 20px;
        
}

.edubtn{
    background-color: white;
    color:green;
    margin: 5px;
    font-size: 20px;
}
.historybtn{
    background-color: white;
    color:green;
    margin: 5px;
    font-size: 20px;
}


div.personal_information{
    
    padding: 20px;
    border:1px solid white;
    border-color: lightgray;
    border:1px solid lightgray;
     
    
}
.selectworkinghours,.selectProf{
    color: green;
    padding: 16px;
    font-size: 16px;
    cursor: pointer;
    font-size:20px;
    height:auto;
    width:20%;
    border=none;
    
}

p,p1,p2,p3,p4,p5,p6,p7,p8,p9{
    font-size: 18px;
}

input[type=text], select{
    width: 50%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    font-size: 20px;
    color:green;
}


div.pinfo {
    border-radius: 5px;
    padding: 20px;
}


div.savebuttons{
    padding: 20px;
    border:1px solid white;
    border-color: lightgray;
    border:1px solid lightgray;
    
}

input[type=number]{
    width: 50%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    font-size: 20px;
    color:green;
}



.uploadpicButoon:hover {
    background-color: #4CAF50;
    color: white;
}
.reviewBtn:hover {
    background-color: #4CAF50;
    color: white;
}
.asClientBtn:hover {
    background-color: #4CAF50;
    color: white;
}
.deleteBtn:hover {
    background-color: #4CAF50;
    color: white;
}

  </style>
</head>
<body>

    <div class="Maincontainer">

            <div class="personal_information" >
                <h2>Registration</h2>
                <br><br><br>

                <div class="pinfo" >
                  
                    <form action="{{route('lawyer.store')}}" method="post">
                         @csrf
                        <label ><b>First Name</b></label><br>
                        <input type="text" id="adress" name="first_name" style="width:70%"><br>
                          <label ><b>Last Name</b></label><br>
                        <input type="text" id="adress" name="last_name" style="width:70%"><br>
                        <label for="adress"><b>Password</b></label><br>
                        <input type="password" id="adress" name="password" style="width:70%"><br>
                        <label for="adress"><b>Confirm Password</b></label><br>
                        <input type="password" id="adress" name="confirm_password" style="width:70%"><br>
                        <label ><b>Address</b></label><br>
                        <input type="text" id="adress" name="adress" style="width:70%"><br>
                        <label ><b>Client Phone</b></label><br>
                        <select id="pNo" name="PhoneNo" style="width:10%">
                          <option value="Pakistan">+92</option>
                          <option value="canada">+61</option>
                          <option value="usa">+14</option>
                          <option value="usa">+21</option>
                        </select>
                        <input type="number" id="adress" name="phone" style="width:60%"><br>
                        <label for="adress"><b>E Mail</b></label><br>
                        <input type="text" id="adress" name="email" style="width:70%"><br>
                        <label for="adress"><b>Licence Number</b></label><br>
                        <input type="text" id="adress" name="licence_number" style="width:70%"><br>
                        <label for="adress"><b>Category</b></label><br>
                        <select id="pNo" name="category" style="width:20%">
                          <option value="Business">Business</option>
                          <option value="Family">Family</option>
                          <option value="Criminal">Criminal</option>
                          <option value="Social">Social</option>
                        </select><br>
                        <label for="adress"><b>Experience</b></label><br>
                        <input type="number" id="adress" name="experience" style="width:70%"><br>
                        <label for="adress"><b>Law Firm Name</b></label><br>
                        <input type="text" id="adress" name="lawfirm_name" style="width:70%"><br>
                        <br><br><br>


                            <button type="submit" class="asClientBtn" >Create Account</button>

                        </form>

                </div>

            </div>


        </div>
</body>
</html>