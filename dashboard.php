<?
$conn = mysqli_connect("localhost", "root", "root", "portfolioo") or die("bazaga ulanmadi");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <title>Abdukhamid Dashboard</title>
</head>
<body>
    <input type="checkbox" id="nav-toggle">
    <div class="sidebar">
        <div class="sidebar-brand">
            <h2><span class="lab la-accusoft"></span> <span>Abdukhamid</span></h2>
        </div>
        <div class="sidebar-menu">
            <ul>
                <li>
                    <a href="" class="active"><span class="las la-igloo"></span>
                    <span>Dashboard</span></a>
                </li>
                <li>
                    <a href=""><span class="las la-users"></span>
                    <span>Customers</span></a>
                </li>
                <li>
                    <a href=""><span class="las la-clipboard-list"></span>
                    <span>Projects</span></a>
                </li>
                <li>
                    <a href=""><span class="las la-shopping-bag"></span>
                    <span>Orders</span></a>
                </li>
                <li>
                    <a href=""><span class="las la-receipt"></span>
                    <span>Inventory</span></a>
                </li>
                <li>
                    <a href=""><span class="las la-user-circle"></span>
                    <span>Accounts</span></a>
                </li>
                <li>
                    <a href=""><span class="las la-clipboard-list"></span>
                    <span>Tasks</span></a>
                </li>
            </ul>
        </div>
    </div>

    <div class="main-content">
        <header>
            <h2>
                <label for="nav-toggle">
                    <span class="las la-bars"></span>
                </label>
                Dashboard
            </h2>
            <div class="search-wrapper">
                <span class="las la-search"></span>
                <input type="search" placeholder="Search here" />
            </div>
            <div class="user-wrapper">
                <img src="./img/2.jpg" width="40px" height="40px" alt="">
                <div>
                    <h4>Abduhamid</h4>
                    <small>Super Admin</small>
                </div>
            </div>
        </header>
        <main>
            <div class="cards">
                <div class="card-single">
                    <div>
                        <h1>54</h1>
                        <span>Customers</span>
                    </div>
                    <div>
                        <span class="las la-users"></span>
                    </div>
                </div>

                 <div class="card-single">
                    <div>
                        <h1>79</h1>
                        <span>Projects</span>
                    </div>
                    <div>
                        <span class="las la-clipboard-list"></span>
                    </div>
                </div>

                <div class="card-single">
                    <div>
                        <h1>124</h1>
                        <span>Orders</span>
                    </div>
                    <div>
                        <span class="las la-shopping-bag"></span>
                    </div>
                </div>

                <div class="card-single">
                    <div>
                        <h1>$6k</h1>
                        <span>Income</span>
                    </div>
                    <div>
                        <span class="lab la-google-wallet"></span>
                    </div>
                </div>
            </div>
            <div class="recent-grid">
                <div class="projects">
                  <div class="card">
                      <div class="card-header">
                           <h3>Recent Projects</h3>
                           <button>See All <span class="las la-arrow-right"></span></button>
                      </div>
                      <div class="card-body">
                          <table width="100%">
                              <thead>
                                  <tr>
                                      <td>Id</td>
                                      <td>Nomi</td>
                                      <td>Email</td>
                                      <td>Project</td>
                                      <td>Number</td>
                                      <td>Text</td>
                                        
                                      <!-- <td>Project Title</td>
                                      <td>Department</td>
                                      <td>Status</td> -->
                                  </tr>
                              </thead>
                              <tbody>
                                <?
                                   $conn = mysqli_connect("localhost", "root", "root", "portfolioo") or die("bazaga ulanmadi");
                                   $take = "select * from info";
                                   $r = mysqli_query($conn, $take) or die(mysqli_error($conn));

                                   $row = mysqli_fetch_array($r, MYSQLI_ASSOC);
                                       echo "<td>".$row["id"]."</td>";
                                       echo "<td>".$row["name"]."</td>";
                                       echo "<td>".$row["email"]."</td>";
                                       echo "<td>".$row["project"]."</td>";
                                       echo "<td>".$row["number"]."</td>";
                                       echo "<td>".$row["text"]."</td>";

                                   
                                ?>
                                  <!-- <tr>
                                      <td>UI/UX Design</td>
                                      <td>UI Team</td>
                                      <td><span class="status purple"></span>review</td>
                                  </tr>
                                  <tr>
                                      <td>Web development</td>
                                      <td>Frontend</td>
                                      <td><span class="status pink"></span>in progress</td>
                                  </tr>
                                  <tr>
                                    <td>Ushop app</td>
                                    <td>Mobile Team</td>
                                    <td><span class="status orange"></span>pending</td>  
                                </tr>
                                
                                <tr>
                                    <td>UI/UX Design</td>
                                    <td>UI Team</td>
                                    <td><span class="status purple"></span>review</td>
                                </tr>
                                <tr>
                                    <td>Web development</td>
                                    <td>Frontend</td>
                                    <td><span class="status pink"></span>in progress</td>
                                </tr>
                                <tr>
                                  <td>Ushop app</td>
                                  <td>Mobile Team</td>
                                  <td><span class="status orange"></span>pending</td>  
                              </tr>
                               <tr>
                                      <td>UI/UX Design</td>
                                      <td>UI Team</td>
                                      <td><span class="status purple"></span>review</td>
                                  </tr>
                                  <tr>
                                      <td>Web development</td>
                                      <td>Frontend</td>
                                      <td><span class="status pink"></span>in progress</td>
                                  </tr>
                                  <tr>
                                    <td>Ushop app</td>
                                    <td>Mobile Team</td>
                                    <td><span class="status orange"></span>pending</td>  
                                </tr>
                                
                                <tr>
                                    <td>UI/UX Design</td>
                                    <td>UI Team</td>
                                    <td><span class="status purple"></span>review</td>
                                </tr>
                                <tr>
                                    <td>Web development</td>
                                    <td>Frontend</td>
                                    <td><span class="status pink"></span>in progress</td>
                                </tr>
                                <tr>
                                  <td>Ushop app</td>
                                  <td>Mobile Team</td>
                                  <td><span class="status orange"></span>pending</td>  
                              </tr>
                              <tr>
                                <td>UI/UX Design</td>
                                <td>UI Team</td>
                                <td><span class="status purple"></span>review</td>
                            </tr>
                            <tr>
                                <td>Web development</td>
                                <td>Frontend</td>
                                <td><span class="status pink"></span>in progress</td>
                            </tr>
                            <tr>
                              <td>Ushop app</td>
                              <td>Mobile Team</td>
                              <td><span class="status orange"></span>pending</td>  
                          </tr>
                          
                          <tr>
                              <td>UI/UX Design</td>
                              <td>UI Team</td>
                              <td><span class="status purple"></span>review</td>
                          </tr>
                          <tr>
                              <td>Web development</td>
                              <td>Frontend</td>
                              <td><span class="status pink"></span>in progress</td>
                          </tr>
                          <tr>
                            <td>Ushop app</td>
                            <td>Mobile Team</td>
                            <td><span class="status orange"></span>pending</td>  
                        </tr>
                         <tr>
                                <td>UI/UX Design</td>
                                <td>UI Team</td>
                                <td><span class="status purple"></span>review</td>
                            </tr>
                            <tr>
                                <td>Web development</td>
                                <td>Frontend</td>
                                <td><span class="status pink"></span>in progress</td>
                            </tr>
                            <tr>
                              <td>Ushop app</td>
                              <td>Mobile Team</td>
                              <td><span class="status orange"></span>pending</td>  
                          </tr>
                          
                          <tr>
                              <td>UI/UX Design</td>
                              <td>UI Team</td>
                              <td><span class="status purple"></span>review</td>
                          </tr>
                          <tr>
                              <td>Web development</td>
                              <td>Frontend</td>
                              <td><span class="status pink"></span>in progress</td>
                          </tr>
                          <tr>
                            <td>Ushop app</td>
                            <td>Mobile Team</td>
                            <td><span class="status orange"></span>pending</td>  
                        </tr> -->
                              </tbody> 
                          </table>
                      </div>
                      <div class="card-body">
                          <div class="tabe-responsive">

                          </div>
                      </div>
                  </div>
                </div>
                <div class="customers">
                    <div class="card">
                        <div class="card-header">
                             <h3>New Customer</h3>
                             <button>See All <span class="las la-arrow-right"></span></button>
                        </div>
                        <!-- <div class="card-body">
                            <div class="customer">
                               <div class="info">
                                <img src="./img/2.jpg" width="40px" height="40px" alt="">
                                <div>
                                    <h4>Lewis S. Cunningham</h4>
                                    <small>CEO Expert</small>
                                </div>
                               </div>
                               <div class="contact">
                                   <span class="las la-user-circle"></span>
                                   <span class="las la-comment"></span>
                                   <span class="las la-phone"></span>
                               </div>
                            </div>

                            <div class="customer">
                                <div class="info">
                                 <img src="./img/2.jpg" width="40px" height="40px" alt="">
                                 <div>
                                     <h4>Lewis S. Cunningham</h4>
                                     <small>CEO Expert</small>
                                 </div>
                                </div>
                                <div class="contact">
                                    <span class="las la-user-circle"></span>
                                    <span class="las la-comment"></span>
                                    <span class="las la-phone"></span>
                                </div>
                             </div>

                             <div class="customer">
                                <div class="info">
                                 <img src="./img/2.jpg" width="40px" height="40px" alt="">
                                 <div>
                                     <h4>Lewis S. Cunningham</h4>
                                     <small>CEO Expert</small>
                                 </div>
                                </div>
                                <div class="contact">
                                    <span class="las la-user-circle"></span>
                                    <span class="las la-comment"></span>
                                    <span class="las la-phone"></span>
                                </div>
                             </div>

                             <div class="customer">
                                <div class="info">
                                 <img src="./img/2.jpg" width="40px" height="40px" alt="">
                                 <div>
                                     <h4>Lewis S. Cunningham</h4>
                                     <small>CEO Expert</small>
                                 </div>
                                </div>
                                <div class="contact">
                                    <span class="las la-user-circle"></span>
                                    <span class="las la-comment"></span>
                                    <span class="las la-phone"></span>
                                </div>
                             </div>

                             <div class="customer">
                                <div class="info">
                                 <img src="./img/2.jpg" width="40px" height="40px" alt="">
                                 <div>
                                     <h4>Lewis S. Cunningham</h4>
                                     <small>CEO Expert</small>
                                 </div>
                                </div>
                                <div class="contact">
                                    <span class="las la-user-circle"></span>
                                    <span class="las la-comment"></span>
                                    <span class="las la-phone"></span>
                                </div>
                             </div>

                             <div class="customer">
                                <div class="info">
                                 <img src="./img/2.jpg" width="40px" height="40px" alt="">
                                 <div>
                                     <h4>Lewis S. Cunningham</h4>
                                     <small>CEO Expert</small>
                                 </div>
                                </div>
                                <div class="contact">
                                    <span class="las la-user-circle"></span>
                                    <span class="las la-comment"></span>
                                    <span class="las la-phone"></span>
                                </div>
                             </div>

                             <div class="customer">
                                <div class="info">
                                 <img src="./img/2.jpg" width="40px" height="40px" alt="">
                                 <div>
                                     <h4>Lewis S. Cunningham</h4>
                                     <small>CEO Expert</small>
                                 </div>
                                </div>
                                <div class="contact">
                                    <span class="las la-user-circle"></span>
                                    <span class="las la-comment"></span>
                                    <span class="las la-phone"></span>
                                </div>
                             </div>

                             <div class="customer">
                                <div class="info">
                                 <img src="./img/2.jpg" width="40px" height="40px" alt="">
                                 <div>
                                     <h4>Lewis S. Cunningham</h4>
                                     <small>CEO Expert</small>
                                 </div>
                                </div>
                                <div class="contact">
                                    <span class="las la-user-circle"></span>
                                    <span class="las la-comment"></span>
                                    <span class="las la-phone"></span>
                                </div>
                             </div>

                             <div class="customer">
                                <div class="info">
                                 <img src="./img/2.jpg" width="40px" height="40px" alt="">
                                 <div>
                                     <h4>Lewis S. Cunningham</h4>
                                     <small>CEO Expert</small>
                                 </div>
                                </div>
                                <div class="contact">
                                    <span class="las la-user-circle"></span>
                                    <span class="las la-comment"></span>
                                    <span class="las la-phone"></span>
                                </div>
                             </div>

                             <div class="customer">
                                <div class="info">
                                 <img src="./img/2.jpg" width="40px" height="40px" alt="">
                                 <div>
                                     <h4>Lewis S. Cunningham</h4>
                                     <small>CEO Expert</small>
                                 </div>
                                </div>
                                <div class="contact">
                                    <span class="las la-user-circle"></span>
                                    <span class="las la-comment"></span>
                                    <span class="las la-phone"></span>
                                </div>
                             </div>

                             <div class="customer">
                                <div class="info">
                                 <img src="./img/2.jpg" width="40px" height="40px" alt="">
                                 <div>
                                     <h4>Lewis S. Cunningham</h4>
                                     <small>CEO Expert</small>
                                 </div>
                                </div>
                                <div class="contact">
                                    <span class="las la-user-circle"></span>
                                    <span class="las la-comment"></span>
                                    <span class="las la-phone"></span>
                                </div>
                             </div>
                        </div> -->
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>
</html>