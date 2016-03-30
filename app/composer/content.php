<div>
    <form id="form" method="post">
        <input type="hidden" name="action" value="1">
        <table class="table table-condensed">
            <tr>
                <th width="150px">Base Dir</th><td><?= $scriptDir ?></td>
            </tr>
            <tr>
                <th >Target Dir</th><td><input name="dir" type="text" id="dir" required></td>
            </tr>
            <tr>
                <th >Command</th>
                <td>
                    <select name="command" id="command">
                        <option value="install">install</option>
                        <option value="update">update</option>
                        <option value="global">require fxp/composer-asset-plugin:~1.1.1</option>
                    </select>
                </td>
            </tr>
            <tr>
                <th>&nbsp;</th><td>
                    <button type="submit" class="btn btn-success">Execute</button>
                </td>
            </tr>
        </table>
    </form>
</div>
<pre id="result"></pre>