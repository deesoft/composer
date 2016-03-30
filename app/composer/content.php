<div>
    <form id="form" method="post">
        <input type="hidden" name="action" value="install">
        <table class="table table-condensed">
            <tr>
                <th width="150px">Base Dir</th><td><?= $scriptDir ?></td>
            </tr>
            <tr>
                <th >Target Dir</th><td><input name="dir" type="text" id="dir"></td>
            </tr>
            <tr>
                <th>&nbsp;</th><td><button id="btn" class="btn btn-success">Install</button></td>
            </tr>
        </table>
    </form>
</div>
<pre id="result"></pre>