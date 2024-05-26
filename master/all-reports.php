<?php
include('../action/dbconnect.php');
include('../them/header.php');
include('../action/getList.php');
$listobj = new getList();
?>
<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3 mt-3">
                    <div class="form-group">
                        <label for="actionType">Action Type</label>
                        <select class="form-control" id="actionType" name="actionType">
                            <option value="">Select Action Type</option>
                            <option>Fitter</option>
                            <option>Stock Out</option>
                            <option>Stock In</option>
                            <option>Item Stock</option>
                            <option>Requisition Item</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-3 mt-3">
                    <div class="form-group">
                        <label for="toDate">FROM DATE</label>
                        <input class="form-control" type="date" id="fromDate" placeholder="FROM DATE" />
                    </div>
                </div>
                <div class="col-md-3 mt-3">
                    <div class="form-group">
                        <label for="toDate">TO DATE</label>
                        <input class="form-control" type="date" id="toDate" placeholder="TO DATE" />
                    </div>
                </div>
                <div class="col-md-3 form-group">
                    <button class="btn btn-primary mt-5 form-control" onclick="generateReport()">
                        <i class="fa fa-download mr-3" aria-hidden="true"></i>Generate Report</button>
                </div>
            </div>

            <div class="card-body text-right">
                <!-- <button onclick="tableToCSV()">Download CSV</button> -->
                <button class="btn btn-success mb-1" onclick="onPrintPaper()"><i class="fa fa-print"></i>Print</button>
                <div id="applytable"></div>
            </div>
            <div class="card-footer">
            </div>
        </div>
    </section>
</div>
<script>

    function generateReport() {

        if (!$("#actionType").val() === 'Item Stock' && !$("#actionType").val() === 'Requisition Item') {
            if ($("#fromDate").val() === '') {
                alert("Please select From Date");
            }
            if ($("#toDate").val() === '') {
                alert("Please select To Date");
            }
        }

        //Generate Stock Out Report Table
        if ($("#actionType").val() === 'Stock Out') {
            $("#applytable").html('');
            var fieldName = "stock_out_header_id";
            var perPage = 10;
            var pageNo = 1;
            const startDate = $('#fromDate').val();
            const endDate = $('#toDate').val();

            $.ajax({
                url: "../action/tableCreator.php",
                type: "POST",
                data: {
                    tableSql: "SELECT stock_out_header_id, customer_name Customer_Name, receipt_no Receipt_No, payment_mode Payment_Mode, customer_total_amount Total_Amount, customer_paid_amount Paid_Amount, stock_out_date SO_Date FROM stock_out_header WHERE stock_out_date BETWEEN DATE_FORMAT('" + startDate + "', '%Y-%m-%d') AND DATE_FORMAT('" + endDate + "', '%Y-%m-%d')"
                    , field: fieldName, perpage: perPage, pageno: pageNo, action: false
                },
                success: function (data) {
                    $("#applytable").html(data);
                    $("#example1").DataTable({
                        "responsive": true, "lengthChange": true, "autoWidth": true, "searching": true, "info": true,
                        "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
                    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
                }
            });
        }

        //Generate Stock IN Report Table
        if ($("#actionType").val() === 'Stock In') {
            $("#applytable").html('');
            var fieldName = "stock_in_header_id";
            var perPage = 10;
            var pageNo = 1;
            const startDate = $('#fromDate').val();
            const endDate = $('#toDate').val();
            $.ajax({
                url: "../action/tableCreator.php",
                type: "POST",
                data: {
                    tableSql: "SELECT stock_in_header_id,supplier.supplier_name Supplier_Name, payment_mode Payment_Mode, supplier_total_amount Total_Amount, date Date FROM stock_in_header INNER JOIN supplier ON  supplier.supplier_id = stock_in_header.supplier_id WHERE date BETWEEN DATE_FORMAT('" + startDate + "', '%Y-%m-%d') AND DATE_FORMAT('" + endDate + "', '%Y-%m-%d')"
                    , field: fieldName, perpage: perPage, pageno: pageNo, action: false
                },
                success: function (data) {
                    $("#applytable").html(data);
                }
            });
        }

        //Generate Fitter Report Table
        if ($("#actionType").val() === 'Fitter') {
            $("#applytable").html('');
            var fieldName = "stock_out_header_id";
            var perPage = 10;
            var pageNo = 1;
            const startDate = $('#fromDate').val();
            const endDate = $('#toDate').val();
            $.ajax({
                url: "../action/tableCreator.php",
                type: "POST",
                data: {
                    tableSql: "SELECT fitter_id, fitter_name, total_amount,fitter_amount, date FROM `fitter_payment_history` WHERE date BETWEEN DATE_FORMAT('" + startDate + "', '%Y-%m-%d') AND DATE_FORMAT('" + endDate + "', '%Y-%m-%d ')" //27-02-2024 09:23:37
                    , field: fieldName, perpage: perPage, pageno: pageNo, action: false
                },
                success: function (data) {
                    $("#applytable").html(data);
                }
            });
        }


        //Generate Stock Availble Report Table
        if ($("#actionType").val() === 'Item Stock') {
            $("#applytable").html('');
            var fieldName = "item_entry_id";
            var perPage = 10;
            var pageNo = 1;
            $.ajax({
                url: "../action/tableCreator.php",
                type: "POST",
                data: {
                    tableSql: "SELECT item_entry_id, item_entry_name, item_entry_quantity FROM `stock_item_entry` WHERE item_entry_quantity > 0"
                    , field: fieldName, perpage: perPage, pageno: pageNo, action: false
                },
                success: function (data) {
                    $("#applytable").html(data);
                }
            });
        }


        //Generate Stock Availble Report Table
        if ($("#actionType").val() === 'Item Stock') {
            $("#applytable").html('');
            var fieldName = "item_entry_id";
            var perPage = 10;
            var pageNo = 1;
            $.ajax({
                url: "../action/tableCreator.php",
                type: "POST",
                data: {
                    tableSql: "SELECT item_entry_id, item_entry_name, item_entry_quantity FROM `stock_item_entry` WHERE item_entry_quantity > 0"
                    , field: fieldName, perpage: perPage, pageno: pageNo, action: false
                },
                success: function (data) {
                    $("#applytable").html(data);
                }
            });
        }

        //Generate Requision Report Table
        if ($("#actionType").val() === 'Requisition Item') {
            $("#applytable").html('');
            var fieldName = "item_entry_id";
            var perPage = 10;
            var pageNo = 1;
            $.ajax({
                url: "../action/tableCreator.php",
                type: "POST",
                data: {
                    tableSql: "SELECT item_entry_id, item_entry_name, item_entry_quantity FROM `stock_item_entry` WHERE item_entry_quantity < 4"
                    , field: fieldName, perpage: perPage, pageno: pageNo, action: false
                },
                success: function (data) {
                    $("#applytable").html(data);
                }
            });
        }

    }

    function tableToCSV() {

        let csv_data = [];

        let rows = document.getElementsByTagName('tr');
        for (let i = 0; i < rows.length; i++) {

            let cols = rows[i].querySelectorAll('td,th');
            let csvrow = [];
            for (let j = 0; j < cols.length; j++) {
                csvrow.push(cols[j].innerHTML);
            }

            csv_data.push(csvrow.join(","));
        }

        csv_data = csv_data.join('\n');
        downloadCSVFile(csv_data);

    }

    function onPrintPaper() {
      var printContents = document.getElementById('applytable').innerHTML;
      var originalContents = document.body.innerHTML;
      document.body.innerHTML = printContents;
      window.print();
      document.body.innerHTML = originalContents;
   }

    function downloadCSVFile(csv_data) {

        CSVFile = new Blob([csv_data], {
            type: "text/csv"
        });

        let temp_link = document.createElement('a');

        temp_link.download = "report-sheet.csv";
        let url = window.URL.createObjectURL(CSVFile);
        temp_link.href = url;

        temp_link.style.display = "none";
        document.body.appendChild(temp_link);

        temp_link.click();
        document.body.removeChild(temp_link);
    }

</script>