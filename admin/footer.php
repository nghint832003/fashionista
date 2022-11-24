</div>

<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>
<!-- Bootstrap core JavaScript-->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="js/admin1.js"></script>

<!-- Bootstrap core JavaScript-->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="js/admin1.js"></script>

<!-- Page level plugins -->
<!-- <script src="vendor/chart.js/Chart.min.js"></script> -->

<script>
    // Chức năng chọn hết
    document.getElementById("btn1").onclick = function ()
    {
        // Lấy danh sách checkbox
        var checkboxes = document.getElementsByName('name[]');

        // Lặp và thiết lập checked
        for (var i = 0; i < checkboxes.length; i++){
            checkboxes[i].checked = true;
        }
    };

    // Chức năng bỏ chọn hết
    document.getElementById("btn2").onclick = function ()
    {
        // Lấy danh sách checkbox
        var checkboxes = document.getElementsByName('name[]');

        // Lặp và thiết lập Uncheck
        for (var i = 0; i < checkboxes.length; i++){
            checkboxes[i].checked = false;
        }
    };
</script>
</body>

</html>
