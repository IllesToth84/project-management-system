<<<<<<< HEAD
function addItem() {
            var ul = document.getElementById("dynamic-list");
            var candidate = document.getElementById("add-contact");
            var li = document.createElement("li");
            li.setAttribute('id', candidate.value);
            li.appendChild(document.createTextNode(candidate.value));
            ul.appendChild(li);
        }

        function removeItem() {
            var ul = document.getElementById("dynamic-list");
            var candidate = document.getElementById("add-contact");
            var item = document.getElementById(candidate.value);
            ul.removeChild(item);
        }

 


 

=======
 function filterTable() {
     var input, filter, table, tr, td, i, txtValue;
     input = document.getElementById("select");
     filter = input.value.toUpperCase();
     table = document.querySelector(".table");
     tr = table.getElementsByTagName("tr");

     for (i = 0; i < tr.length; i++) {
         td = tr[i].getElementsByTagName("td")[2];
         if (td) {
             txtValue = td.textContent || td.innerText;
             if (txtValue.toUpperCase().indexOf(filter) > -1) {
                 tr[i].style.display = "";
             } else {
                 tr[i].style.display = "none";
             }
         }
     }
 }

 function validateForm() {
     var x = document.forms["project-form"]["contacts-name"].value;
     console.log(x);
     if (x == "") {
         alert("Name must be filled out");
         return false;
     }
 }


 'use strict';

 var numberOfItems = $('#loop .table-row').length;
 var limitPerPage = 4;
 $("#loop .table-row:gt(" + (limitPerPage - 1) + ")").hide();
 var totalPages = Math.round(numberOfItems / limitPerPage);
 $('.pagination').append("<li class='current-page active'><a href='javascript:void(0)'>" + 1 + "</a></li>");

 for (var i = 2; i <= totalPages; i++) {
     $('.pagination').append("<li class='current-page'><a href='javascript:void(0)'>" + i + "</a></li>");
 }

 $('.pagination').append("<li id='next-page'><a href='javascript:void(0)' aria-label='Next'><span aria-hidden='true'>&raquo;</span></a></li>");

 $(".pagination li.current-page").on("click", function () {
     if ($(this).hasClass("active")) {
         return false;
     } else {
         var currentPage = $(this).index();
         $(".pagination li").removeClass("active");
         $(this).addClass("active");
         $("#loop .table-row").hide();
         var grandTotal = limitPerPage * currentPage;

         for (var i = grandTotal - limitPerPage; i < grandTotal; i++) {
             $("#loop .table-row:eq(" + i + ")").show();
         }
     }
 });

 $("#next-page").on("click", function () {
     var currentPage = $(".pagination li.active").index();
     if (currentPage === totalPages) {
         return false;
     } else {
         currentPage++;
         $(".pagination li").removeClass("active");
         $("#loop .table-row").hide();

         var grandTotal = limitPerPage * currentPage;

         for (var i = grandTotal - limitPerPage; i < grandTotal; i++) {
             $("#loop .table-row:eq(" + i + ")").show();
         }
         $(".pagination li.current-page:eq(" + (currentPage - 1) + ")").addClass("active");
     }
 });


 $("#previous-page").on("click", function () {
     var currentPage = $(".pagination li.active").index();
     if (currentPage === 1) {
         return false;
     } else {
         currentPage--;
         $(".pagination li").removeClass("active");
         $("#loop .table-row").hide();

         var grandTotal = limitPerPage * currentPage;

         for (var i = grandTotal - limitPerPage; i < grandTotal; i++) {
             $("#loop .table-row:eq(" + i + ")").show();
         }
         $(".pagination li.current-page:eq(" + (currentPage - 1) + ")").addClass("active");
     }
 });
>>>>>>> 139c6a8... second commit
