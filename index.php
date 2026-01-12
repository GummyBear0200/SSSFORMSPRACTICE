<!DOCTYPE html>
<html>
<head>
<title>SSS E-1 Form</title>

<style>
body{
    font-family: Arial, sans-serif;
    background:#ddd;
}

.container{
    width:900px;
    margin:20px auto;
    background:white;
    padding:20px;
    border:2px solid black;
}

.header{
    text-align:center;
    border-bottom:2px solid black;
    padding-bottom:10px;
    margin-bottom:15px;
}

.header h2{
    margin:0;
}
.header p{
    font-size:12px;
}

.section{
    border:1px solid black;
    margin-bottom:10px;
}

.section-title{
    background:#eee;
    font-weight:bold;
    padding:5px;
    border-bottom:1px solid black;
}

.row{
    display:flex;
}

.cell{
    border-right:1px solid black;
    padding:5px;
    flex:1;
}

.cell:last-child{
    border-right:none;
}

label{
    font-size:12px;
    display:block;
}

input, select{
    width:100%;
    border:none;
    border-bottom:1px solid black;
    outline:none;
    font-size:14px;
}

.address-box{
    width:100%;
    border:1px solid black;
    height:40px;
}

button{
    padding:10px 20px;
    margin-top:10px;
}

.error{
    color:red;
    font-weight:bold;
}
</style>
</head>

<body>

<div class="container">

<div class="header">
    <h2>PERSONAL RECORD</h2>
    <p>Republic of the Philippines – Social Security System (Practice Only eme eme)</p>
</div>

<form id="sssForm" method="POST" action="save.php">


<div class="section">
<div class="section-title">NAME</div>
<div class="row">
    <div class="cell">
        <label>Last Name</label>
        <input type="text" name="last_name" id="last_name">
    </div>
    <div class="cell">
        <label>First Name</label>
        <input type="text" name="first_name" id="first_name">
    </div>
    <div class="cell">
        <label>Middle Name</label>
        <input type="text" name="middle_name">
    </div>
</div>
</div>

>
<div class="section">
<div class="row">
    <div class="cell">
        <label>Date of Birth</label>
        <input type="date" name="dob" id="dob">
    </div>
    <div class="cell">
        <label>Sex</label>
        <select name="sex" id="sex">
            <option value=""></option>
            <option>Male</option>
            <option>Female</option>
        </select>
    </div>
    <div class="cell">
        <label>Civil Status</label>
        <select name="civil_status" id="civil_status">
            <option value=""></option>
            <option>Single</option>
            <option>Married</option>
            <option>Widowed</option>
        </select>
    </div>
</div>
</div>


<div class="section">
<div class="row">
    <div class="cell">
        <label>Nationality</label>
        <input type="text" name="nationality" id="nationality">
    </div>
</div>
</div>


<div class="section">
<div class="section-title">Place of Birth</div>
<div class="row">
    <div class="cell">
        <input type="text" name="place_of_birth" id="place_of_birth">
        <br>
        <input type="checkbox" id="sameAddress"> The same with Home Address
    </div>
</div>
</div>

->
<div class="section" id="homeDiv">
<div class="section-title">Home Address</div>
<div class="row">
    <div class="cell">
        <input type="text" name="home_address" id="home_address">
    </div>
</div>
</div>


<div class="section">
<div class="row">
    <div class="cell">
        <label>Mobile No.</label>
        <input type="text" name="mobile" id="mobile">
    </div>
    <div class="cell">
        <label>Email Address</label>
        <input type="text" name="email" id="email">
    </div>
</div>
</div>

<button type="submit">SUBMIT</button>
<div class="error" id="errorBox"></div>

</form>
</div>

<script>
document.getElementById("sameAddress").addEventListener("change", function(){
    if(this.checked){
        document.getElementById("homeDiv").style.display="none";
    }else{
        document.getElementById("homeDiv").style.display="block";
    }
});

document.getElementById("sssForm").addEventListener("submit", function(e){
    let error="";

    if(first_name.value=="") error="First name required";
    else if(last_name.value=="") error="Last name required";
    else if(dob.value=="") error="DOB required";
    else if(sex.value=="") error="Sex required";
    else if(civil_status.value=="") error="Civil status required";
    else if(nationality.value=="") error="Nationality required";
    else if(place_of_birth.value=="") error="Place of birth required";
    else if(!sameAddress.checked && home_address.value=="") error="Home address required";
    else if(mobile.value=="") error="Mobile required";
    else if(email.value=="") error="Email required";

    if(error!=""){
        e.preventDefault();
        errorBox.innerHTML=error;
    }
});
</script>

</body>
</html>
