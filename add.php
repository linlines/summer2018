<title>添加图书</title>
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/script.js"></script>
<?php
require_once('head.php');
/*面向对象连接数据库 1111111*/
require_once('toolClass/connDB.php');
//查询图书所有分类
$sqlcate="select categoryId,categoryName from categories";
$rescate=$db->select($sqlcate);
?>
<!-- 添加图书表单 -->
<form id="form2">
	<h2 align="center">添加图书</h2>
<div class="form-group col-md-2 col-md-offset-5">
	<label >图书名称</label>
		<input type="text" name="bookName" class="form-control">
</div>
<div class="form-group col-md-2 col-md-offset-5">
	<label >图书分类</label>
		<select name="categoryId" class="form-control">
		<option selected>——请选择分类——</option>
		<?php
		foreach ($rescate as $row) {
				echo "<option value='{$row['categoryId']}'>{$row['categoryName']}</option>";			
		}
		?>
	</select>
</div>

<div class="form-group col-md-2 col-md-offset-5">
	<label >出版社</label>
		<input type="text" name="publisher" class="form-control">
</div>

<div class="form-group col-md-2 col-md-offset-5">
	<label >作者</label>
		<input type="text" name="author" class="form-control">
</div>
<div class="form-group col-md-2 col-md-offset-5">
	<label >价格</label>
		<input type="text" name="price" class="form-control">
</div>
<div class="form-group col-md-2 col-md-offset-5">
	<label >图书介绍</label>
		<textarea rows="4" cols="20"  name="detail" style="resize: none" class="form-control"></textarea>
</div>
<div class="form-group col-md-2 col-md-offset-5">
<input type="button" id="btnAdd" value="添加图书" class="btn btn-default">
</div>
</form>
