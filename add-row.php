
<script type="text/javascript" src="./js/jquery-1.11.2.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<html>
<head>
	<title>Test Knowledge</title>
</head>
<body>
	<input type="button" name="addrows" id="addrows" value="Add Row" onclick="addTableRow($('#mytable'));" class="btn" style="float: right; margin-bottom: 20px;"/>
	<input type="button" name="deleterows" id="deleterows" value="Delete Row" class="btn" style="float: left; margin-bottom: 20px;"/><br/>
<table width="80%" border="1" style="border:1px solid #808080" id="mytable">
    <thead>
    <tr>
        <th>S</th>
        <th>Description</th>
        <th>Price/Day</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td style="width: 3%; text-align: center"><input type="checkbox" name="pcheckbox"/></td>
        <td style="width: 70%"><input type="text" name="project_desc[]" class="form-control" id="project_desc" value="" placeholder="Descriptiion"/></td>
        <td><input type="number" name="proamount[]" class="proamount form-control" autocomplete="off" value="" placeholder="Price/Day"/></td>
    </tr>
    </tbody>
</table>
</body>
<script>
    $("#addrows").click(function () {
        $("#mytable").each(function () {
        var tds = '<tr>';
            jQuery.each($('tr:last td', this), function () {
                tds += '<td>' + $(this).html() + '</td>';
            });
        tds += '</tr>';
            if ($('tbody', this).length > 0) {
                $('tbody', this).append(tds);
            } else {
                $(this).append(tds);
            }
        });
    });

    // Find and remove selected table rows
    $("#deleterows").click(function () {
        $("#mytable tbody").find('input[name="pcheckbox"]').each(function () {
            if ($(this).is(":checked")) {                
                $('#mytable tbody').find('tr:gt(0):last').remove();
            }
        });
    });
    </script>
</html>