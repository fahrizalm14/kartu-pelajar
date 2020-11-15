<div class="container">
    <br />
    <br />
    <h2 align="center">Dynamically Add or Remove input fields in PHP with JQuery</h2>
    <div class="form-group">
        <form name="add_name" id="add_name">
            <table class="table table-hover table-borderless" id="dynamic_field">
                <tr>
                    <td><input type="text" name="name[]" placeholder="Enter your Name" class="form-control name_list" /></td>
                    <td><button type="button" name="add" id="add" class="btn btn-success">Add More</button></td>
                </tr>
            </table>
            <input type="button" name="submit" id="submit" class="btn btn-info" value="Submit" />
        </form>
    </div>
</div>