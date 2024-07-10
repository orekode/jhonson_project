<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Student</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="/styles/student.css">
   <link rel="stylesheet" href="/styles/main.css">
   <link rel="stylesheet" href="/styles/Dashboard.css">
</head>
<body>
   <header class="header">
      <section class="flex">
         <a href="home.html" class="logo">Student Dashboard</a> 
         <div class="icons">
            <div id="menu-btn" class="fas fa-bars"></div>
            <div id="search-btn" class="fas fa-search"></div>
            <div id="user-btn" class="fas fa-user"></div>
            <div id="toggle-btn" class="fas fa-sun"></div>
         </div> 
      </section>
   </header>  
   <section class="teachers">
      <h1 class="heading">Computer Science</h1>
      <div class="box-container">
         <div class="box offer">
            <!-- <h3>Plagiarism Check</h3> -->
            <a href="/upload" class="inline-btn">Proceed to upload</a>
         </div>
         <div class="box offer">
            <!-- <div class="tutor">
               
            </div> -->
            <a href="teacher_profile.html" class="inline-btn">View Feedback</a>
         </div>
      </div>
   </section>
   <main>
      <div class="dashboard-container">
         <table>
               <thead>
                  <tr>
                     <td>NAME</td>
                     <td>PROJECT NAME</td>
                     <td>SCORE</td>
                     <td>FEEDBACK</td>
                  </tr>
               </thead>
               <tbody>
                  <tr>
                     <td>MOSES JOHNSON</td>
                     <td>CODING PLATFORM</td>
                     <td>87%</td>
                     <td id="table_btn"> 
                           <button class=" table_btn apr">Approve</button>
                           <button class="table_btn rej">Reject</button>
                     </td>
                  </tr>
                  <tr>
                     <td>Sarpong Gideon</td>
                     <td>IOT</td>
                     <td>60%</td>
                     <td id="table_btn"> 
                           <button class=" table_btn apr">Approve</button>
                           <button class="table_btn rej">Reject</button>
                     </td>
                  </tr>
                  <tr>
                     <td>MOSES JOHNSON</td>
                     <td>CODING PLATFORM</td>
                     <td>50%</td>
                     <td id="table_btn"> 
                           <button class=" table_btn apr">Approve</button>
                           <button class="table_btn rej">Reject</button>
                     </td>
                  </tr>

                  <tr>
                     <td>GIDEON JOHNSON</td>
                     <td>CODING PLATFORM</td>
                     <td>-</td>
                     <td id="table_btn"> 
                           <button class=" table_btn apr">Approve</button>
                           <button class="table_btn rej">Reject</button>
                     </td>
                  </tr>

                  <tr>
                     <td>MOSES JOHNSON</td>
                     <td>CODING PLATFORM</td>
                     <td>50%</td>
                     <td id="table_btn"> 
                           <button class=" table_btn apr">Approve</button>
                           <button class="table_btn rej">Reject</button>
                     </td>
                  </tr>
                  <tr>
                     <td> JOHNSON</td>
                     <td>CODING PLATFORM</td>
                     <td>-</td>
                     <td id="table_btn"> 
                           <button class=" table_btn apr">Approve</button>
                           <button class="table_btn rej">Reject</button>
                     </td>
                  </tr>
               </tbody>
         </table>
      </div>
   </main>
<!-- custom js file link  -->
<script src="js/script.js"></script>  
</body>
</html>