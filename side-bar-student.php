 <div class="admin">
 <div class="manu">
    <ul>

      <li class='<?php echo ($_REQUEST['sDashboard']==true && isset($_REQUEST['sDashboard']))?  "actives":""; ?>'><a class="dashboard" href="studentDashboard.php?sDashboard=true&&2747"><i class="fa-solid fa-book"></i> <span style='font-size: 13px;'>STUDENT DASHBOARD</span></a></li>
        <li class='<?php echo ($_REQUEST['bookList']==true && isset($_REQUEST['bookList']))?  "actives":""; ?>'><a href="student-book-list.php?bookList=true&&2747"><i class="fa-solid fa-list"></i>  Book List</a></li>
        <li class='<?php echo ($_REQUEST['bookissue']==true && isset($_REQUEST['bookissue']))?  "actives":""; ?>'><a href="student-issue-book.php?bookissue=true&&2747"><i class="fa-solid fa-triangle-exclamation"></i>  Issue Book</a></li>
        <li class=""><a href="Student_book_request.php"><i class="fa-solid fa-book-open-reader"></i>Request For Book</a></li>
        <li class=""><a href="student_return_book.php"><i class="fa-solid fa-bookmark"></i>  Return Books</a></li>
        <li class=""><a href="home.php"><i class="fa-solid fa-right-from-bracket"></i>  LogOut</a></li>
    </ul>
  </div>
 </div>            

 
