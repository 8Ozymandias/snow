@extends('layout')

@section('content')

    <h1>Create a Student Application </h1>

    <form method="POST" action="/students"> 
    {{ csrf_field() }}

<!-- @3:22-
So now you might be thinking well an enpoint of slash students (/students), we already have that registered here (web.php), so how does that work? 
Well think about it, when we submit this form it's NOT making a get request to slash students(/students) which is what you see here, a get request to slash students, 
instead it's making a POST request to slash students which means we don't have any routes set up for that. 
So if we submit it, we get a HTTP Exception. 
This is basically the frameworks way of saying 
'Hey I tried to submit this form but there is no method that I can call here. So let's fix that by registering a route.'-->  

        <div>
            <input type="text" name="firstname" placeholder="First Name">    
        </div>
<!-- |||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||| -->
        <div>
            <input type="text" name="middlename" placeholder="Middle Name">    
        </div>                
<!-- |||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||| -->
        <div>
            <input type="text" name="lastname" placeholder="Last Name">    
        </div>        
<!-- |||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||| -->
        <div>
            <input type="text" name="email" placeholder="Email">    
        </div>   
<!-- |||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||| -->
        <div>
            <input type="text" name="trn" placeholder="TRN">    
        </div>
<!-- |||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||| -->
        <div>
            <input type="text" name="school" placeholder="School">    
        </div>                
<!-- |||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||| -->
        <div>
            <input type="text" name="faculty" placeholder="Faculty">    
        </div>        
<!-- |||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||| -->
        <div>
            <input type="text" name="programmeofstudy" placeholder="Programme of Study">    
        </div>   
<!-- |||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||| -->

        <div>
            <input type="text" name="yearofstudy" placeholder="Year of Study">    
        </div>
<!-- |||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||| -->
        <div>
            <input type="text" name="enrollmentstatus" placeholder="Enrollment Status">    
        </div>                
<!-- |||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||| -->
        <div>
            <input type="text" name="phone" placeholder="Phone">    
        </div>        
<!-- |||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||| -->
        <div>
            <input type="text" name="address" placeholder="Address">    
        </div>    
<!-- |||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||| -->
        <div>
            <input type="text" name="emergencycontactname" placeholder="Emergency Contact Name">    
        </div>
<!-- |||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||| -->
        <div>
            <input type="text" name="emergencyscontactrelationtoapplicant" placeholder="Emergency's Contact Relation to Applicant">    
        </div>                
<!-- |||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||| -->
        <div>
            <input type="text" name="emergencycontactsphonenumberhome" placeholder="Emergency Contact's Phone Number (Home)">    
        </div>        
<!-- |||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||| -->
        <div>
            <input type="text" name="emergencycontactsaddress" placeholder="Emergency Contact's Address">    
        </div>   
<!-- |||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||| -->
        <div>
            <input type="text" name="howdidyouhearaboutus" placeholder="How did you hear about us?">    
        </div>  
<!-- |||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||| -->
        <div>
            <input type="text" name="gender" placeholder="Gender">    
        </div>
<!-- |||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||| -->
        <div>
            <input type="text" name="maritalstatus" placeholder="Marital Status">    
        </div>                
<!-- |||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||| -->
        <div>
            <input type="text" name="placementoption" placeholder="Placement Option">    
        </div>        
<!-- |||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||| -->
        <div>
            <input type="text" name="dateofbirth" placeholder="Date of Birth">    
        </div>   
<!-- |||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||| -->
<!-- |||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||| -->
<!-- |||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||| -->    
<!-- |||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||| -->
<!-- |||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||| -->
       
        <div>
            <textarea name="description" placeholder="Student information"></textarea>
        </div>

<!-- |||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||| -->
<!-- |||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||| -->    
<!-- |||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||| -->
<!-- |||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||| -->
<!-- |||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||| -->

        <div>
            <button type="submit">Submit Application</button>
        
        </div>

    </form>         

   

    @endsection