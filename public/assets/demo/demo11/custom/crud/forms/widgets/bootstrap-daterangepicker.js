var BootstrapDaterangepicker={init:function(){!function(){$("#m_daterangepicker_1, #m_daterangepicker_1_modal").daterangepicker({buttonClasses:"m-btn btn",applyClass:"btn-warning",cancelClass:"btn-secondary"}),$("#m_daterangepicker_2").daterangepicker({buttonClasses:"m-btn btn",applyClass:"btn-warning",cancelClass:"btn-secondary"},function(a,t,n){$("#m_daterangepicker_2 .form-control").val(a.format("YYYY-MM-DD")+" / "+t.format("YYYY-MM-DD"))}),$("#m_daterangepicker_2_modal").daterangepicker({buttonClasses:"m-btn btn",applyClass:"btn-warning",cancelClass:"btn-secondary"},function(a,t,n){$("#m_daterangepicker_2 .form-control").val(a.format("YYYY-MM-DD")+" / "+t.format("YYYY-MM-DD"))}),$("#m_daterangepicker_3").daterangepicker({buttonClasses:"m-btn btn",applyClass:"btn-warning",cancelClass:"btn-secondary"},function(a,t,n){$("#m_daterangepicker_3 .form-control").val(a.format("YYYY-MM-DD")+" / "+t.format("YYYY-MM-DD"))}),$("#m_daterangepicker_3_modal").daterangepicker({buttonClasses:"m-btn btn",applyClass:"btn-primary",cancelClass:"btn-secondary"},function(a,t,n){$("#m_daterangepicker_3 .form-control").val(a.format("YYYY-MM-DD")+" / "+t.format("YYYY-MM-DD"))}),$("#m_daterangepicker_4").daterangepicker({buttonClasses:"m-btn btn",applyClass:"btn-primary",cancelClass:"btn-secondary",timePicker:!0,timePickerIncrement:30,locale:{format:"MM/DD/YYYY h:mm A"}},function(a,t,n){$("#m_daterangepicker_4 .form-control").val(a.format("MM/DD/YYYY h:mm A")+" / "+t.format("MM/DD/YYYY h:mm A"))}),$("#m_daterangepicker_5").daterangepicker({buttonClasses:"m-btn btn",applyClass:"btn-primary",cancelClass:"btn-secondary",singleDatePicker:!0,showDropdowns:!0,locale:{format:"MM/DD/YYYY"}},function(a,t,n){$("#m_daterangepicker_5 .form-control").val(a.format("MM/DD/YYYY")+" / "+t.format("MM/DD/YYYY"))});var a=moment().subtract(29,"days"),t=moment();$("#m_daterangepicker_6").daterangepicker({buttonClasses:"m-btn btn",applyClass:"btn-warning",cancelClass:"btn-secondary",startDate:a,endDate:t,ranges:{Today:[moment(),moment()],"Last 7 Days":[moment().subtract(6,"days"),moment()],"Last 30 Days":[moment().subtract(29,"days"),moment()],"This Month":[moment().startOf("month"),moment().endOf("month")],"Last 3 Months":[moment().subtract(3,"month").startOf("month"),moment().subtract(1,"month").endOf("month")]}},function(a,t,n){$("#m_daterangepicker_6 .form-control").val(a.format("MM/DD/YYYY")+" / "+t.format("MM/DD/YYYY"))})}(),$("#m_daterangepicker_1_validate").daterangepicker({buttonClasses:"m-btn btn",applyClass:"btn-primary",cancelClass:"btn-secondary"},function(a,t,n){$("#m_daterangepicker_1_validate .form-control").val(a.format("YYYY-MM-DD")+" / "+t.format("YYYY-MM-DD"))}),$("#m_daterangepicker_2_validate").daterangepicker({buttonClasses:"m-btn btn",applyClass:"btn-primary",cancelClass:"btn-secondary"},function(a,t,n){$("#m_daterangepicker_3_validate .form-control").val(a.format("YYYY-MM-DD")+" / "+t.format("YYYY-MM-DD"))}),$("#m_daterangepicker_3_validate").daterangepicker({buttonClasses:"m-btn btn",applyClass:"btn-primary",cancelClass:"btn-secondary"},function(a,t,n){$("#m_daterangepicker_3_validate .form-control").val(a.format("YYYY-MM-DD")+" / "+t.format("YYYY-MM-DD"))})}};jQuery(document).ready(function(){BootstrapDaterangepicker.init()});