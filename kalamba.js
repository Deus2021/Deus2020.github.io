
let menu = document.querySelector('#menu-bars');
let header = document.querySelector('header');

menu.onclick = () =>
{
   menu.classList.toggle('fa-times');
   header.classList.toggle('active');
}

window.onscroll = () =>
{
   menu.classList.remove('fa-times');
   header.classList.remove('active');
}

let cousor1 = document.querySelector('.cousor-1');
let cousor2 = document.querySelector('.cousor-2');

window.onmousemove = (m) =>
{
   cousor1.style.top = m.pageY + 'px';
   cousor1.style.left = m.pageX + 'px';
   cousor2.style.top = m.pageY + 'px';
   cousor2.style.left = m.pageX + 'px';
}

document.querySelector('a').forEach(link =>
   {
     link.onmouseenter = () =>
     {
        cousor1.classList.add('active');
        cousor2.classList.add('active');
     }

     link.onmouseleave = () =>
     {
        cousor1.classList.remove('active');
        cousor2.classList.remove('active');
     }
   });


   $(window).onscroll(function ()
   {
       if($(document).height() <= $(window).scrollTop() + $(window).height())
       {
          loadmore();
       }
   });

   function loadmore()
   {
      var val = document.getElementsByClassName("card-body").value;
      $.ajax({
         type: "post",
         url: "kalaretrive.php",
         data: "data",
         dataType: "dataType",
         success: function (response) {
            var content = document.getElementsByClassName("col");
            content.innerHTML = content.innerHTML+response;


            document.getElementById("").value = Number(val)+10;
            
         }
      });
   }

   // $(document).ready(function () {
   //    $(window).scroll(function)
   //    {
   //       if(this.scroll > 20)
   //       {

   //       }
   //    }
   // });


   /* globals Chart:false, feather:false */

// (function () {
//    'use strict'
 
//    feather.replace({ 'aria-hidden': 'true' })
 
//    // Graphs
//    var ctx = document.getElementById('myChart')
//    // eslint-disable-next-line no-unused-vars
//    var myChart = new Chart(ctx, {
//      type: 'line',
//      data: {
//        labels: [
//          'Sunday',
//          'Monday',
//          'Tuesday',
//          'Wednesday',
//          'Thursday',
//          'Friday',
//          'Saturday'
//        ],
//        datasets: [{
//          data: [
//            15339,
//            21345,
//            18483,
//            24003,
//            23489,
//            24092,
//            12034
//          ],
//          lineTension: 0,
//          backgroundColor: 'transparent',
//          borderColor: '#007bff',
//          borderWidth: 4,
//          pointBackgroundColor: '#007bff'
//        }]
//      },
//      options: {
//        scales: {
//          yAxes: [{
//            ticks: {
//              beginAtZero: false
//            }
//          }]
//        },
//        legend: {
//          display: false
//        }
//      }
//    })
//  })()
 