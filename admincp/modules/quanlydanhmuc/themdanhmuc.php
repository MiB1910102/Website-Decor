<form action="../../../../Mecuti/admincp/modules/quanlydanhmuc/xulydanhmuc.php" method="POST">
    <table style="width:60%;margin:10px;" >
        <tr>
            <th>
                <h2 style="font-weight: 600;">Thêm danh mục sản phẩm</h2>
            </th>
        </tr>
        <tr>
            <th style="width:40%;">ID danh mục sản phẩm:</th>
            <td> <input type="text" class="form-control" id="validationTooltip01" value="" name="id" required>
                <div class="valid-tooltip">
                    Looks good!
                </div>
            </td>
        </tr>
        <tr>
            <th style="width:40%;">Tên danh mục sản phẩm:</th>
            <td> <input type="text" class="form-control" id="validationTooltip01" value="" name="tendanhmuc" required>
                <div class="valid-tooltip">
                    Looks good!
                </div>
            </td>
        </tr>
        <tr>
            <td><input class="btn btn-secondary" type="submit" value="Thêm danh mục sản phẩm" name="themdanhmuc" style="margin: 10px auto;"></td>
        </tr>
    </table>
</form>