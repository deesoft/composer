<div>
    <form id="form" method="post">
        <input type="hidden" name="action" value="1">
        <table class="table table-condensed">
            <tr>
                <th width="150px">Base Dir</th><td><?= $scriptDir ?></td>
            </tr>
            <tr>
                <th >Target Dir</th><td><input type="text" name="dir" id="dir" required></td>
            </tr>
            <tr>
                <th >Environment</th><td><input type="text" name="env" id="dir"></td>
            </tr>
            <tr>
                <th >Overwrite</th><td><input type="checkbox" name="overwrite" id="overwrite" value="a"></td>
            </tr>
            <tr>
                <th>&nbsp;</th><td><button type="submit" class="btn btn-success">Init</button></td>
            </tr>
        </table>
    </form>
</div>
<pre id="result"></pre>