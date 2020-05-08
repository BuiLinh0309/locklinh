<?php
    if (isset($this->data[1])){
        $id = $this->data[1];
        $urow=null;
        foreach ($this->data[0] as $row)
            if($row['id']==$this->data[1])
                $urow = $row;
            $array = [1,2,3,4];
        ?>
        <div class="row">
            <div class="col-sm-5" style="margin-left: 30%;">
                <form action="http://bookdemo.com/Home/edit/">
                    <div class="form-group">
                        <input type="text" class="form-control" name="id"  value="<?php echo $urow['id'] ?>" readonly>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="name"  value="<?php echo $urow['name'] ?>" placeholder="tên sách">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="author" value="<?php echo $urow['author'] ?>"  placeholder="tác giả" >
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="type" value="<?php echo $urow['type'] ?>"  placeholder="thể loại">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="producer" value="<?php echo $urow['producer'] ?>" placeholder="nhà xuất bản" >
                    </div>
                    <button type="submit" class="btn btn-warning">Cập nhật</button>
                </form>
            </div>
        </div>
    <?php
        unset($this->data[1]);
    }
?>


<a class="btn btn-success" href="http://bookdemo.com/Home/add/">
    <i class="glyphicon glyphicon-plus-sign">
        Thêm
    </i>
</a>
<br><br>
<table class="table table-striped">
    <thead>
    <tr>
        <th>ID</th>
        <th>Tên Sách</th>
        <th>Tác giả</th>
        <th>Thể loại</th>
        <th>Nhà xuất bản</th>
        <th>Tác vụ</th>
    </tr>
    </thead>
    <tbody>
<?php
if(isset($this->data[0])){
    foreach ($this->data[0] as $row){
        echo "<tr>
            <td>".$row['id']."</td>
            <td>".$row['name']."</td>
           <td>".$row['author']."</td>
            <td>".$row['type']."</td>
            <td>".$row['producer']."</td>
            <td>
                <a class=\"btn btn-info\" href='/nothings'>chi tiết</a>
                <a class=\"btn btn-warning\" href=\"http://bookdemo.com/Home/indexedit/".$row['id']."\"><i class='glyphicon glyphicon-pencil'></i></a>
                <a class=\"btn btn-danger\" href='http://bookdemo.com/Home/delete/".$row['id']."' ><i class='glyphicon glyphicon-remove'></i></a>
            </td>
            </tr>";
    }
}
else echo "Khong co $ data";
?></tbody>
</table>
