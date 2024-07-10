<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lecturer</title>
    <link rel="stylesheet" href="/styles/main.css">
    <link rel="stylesheet" href="/styles/Dashboard.css">
</head>
<body>
   <header>
    <nav class="nav-container">
        <div class="logo">
            <a href="#">COMPUTER SCIENCE</a>
        </div>
        <div class="btn">
            <div class="profile">
                <a href="">
                    <ion-icon name="person-circle-outline"></ion-icon>
                    <h5>Lecturer</h5>
                </a>
            </div>
            <button class="btn primary-btn">
                Logout
                <ion-icon name="log-out-outline"></ion-icon>
            </button>
        </div>
    </nav>
   </header>

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
       <div class="export_btns">
            <button class="export">EXPORT</button>
            <button class="export download">DOWNLOAD</button>
       </div>
    </div>
   </main>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="/js/main.js"></script>
    
    
</body>
</html>