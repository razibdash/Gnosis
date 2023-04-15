
<div class="admin side-menu-bar">
      <div class="manu">
            <ul class='side-menu-bar-ul'>
            <li class='<?php echo ($_REQUEST['adDashboard']==true && isset($_REQUEST['adDashboard']))?  "actives":""; ?>' ><a class="dashboard " href="adminDashboard.php?adDashboard=true&&26474"><span ><i class="fa-solid fa-book"></i> DASHBOARD</span></a>
            <li class='<?php echo ($_REQUEST['newBook']==true && isset($_REQUEST['newBook']))?  "actives":""; ?>' ><a href="add-new-book.php?newBook=true&&26474"><i class="fa-sharp fa-solid fa-book-tanakh"></i>  Add book</a></li>
                <li class='<?php echo ($_REQUEST['bookList']==true && isset($_REQUEST['bookList']))?  "actives":""; ?>' ><a href="book-list.php?bookList=true&&26474"><i class="fa-solid fa-list"></i>  Book List</a></li>
                <li class='<?php echo ($_REQUEST['sinfoAdmin']==true && isset($_REQUEST['sinfoAdmin']))?  "actives":""; ?>' ><a href="student-info.php?sinfoAdmin=true&&26474"><i class="fa-solid fa-graduation-cap icon-dada"></i>  Student Info</a></li>
                <li class='<?php echo ($_REQUEST['issuesAdmin']==true && isset($_REQUEST['issuesAdmin']))?  "actives":""; ?>' ><a href="issue-book.php?issuesAdmin=true&&26474"><i class="fa-solid fa-triangle-exclamation"></i>  Issue Book</a></li>
                <li class='<?php echo ($_REQUEST['bookRequest']==true && isset($_REQUEST['bookRequest']))?  "actives":""; ?>' ><a href="book-request.php?bookRequest=true&&26474p"><i class="fa-solid fa-book-open-reader"></i> Book Request</a></li>
                <li class='<?php echo ($_REQUEST['returnBook']==true && isset($_REQUEST['returnBook']))?  "actives":""; ?>' ><a href="return-books.php?returnBook=true&&26474"><i class="fa-solid fa-bookmark"></i>  Return Books</a></li>
                <li class=""><a href="home.php?"><i class="fa-solid fa-right-from-bracket"></i>  LogOut</a></li>
            </ul>
          </div>
    </div>  
