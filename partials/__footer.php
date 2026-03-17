
    <script src="<?= $flowbiteJsPath ?? 'assets/js/flowbite.min.js'?>"></script>
    <script src="<?= $DTJsPath ?? 'assets/js/simple-datatables.js'?>"></script>
    <script>
        if (document.getElementById("search-table") && typeof simpleDatatables.DataTable !== 'undefined') {
            const dataTable = new simpleDatatables.DataTable("#search-table", {
                searchable: true,
                sortable: false
            });
        }

    </script>
</body>
</html>