{* Header einbinden *}
{include file="header.tpl"}

<h2>{$module_headline}</h2>
<div class="row">
    <div class="col-md-12">
        <p>{$description}</p>
    </div>
    <div class="col-md-12">
        <table class="table table-bordered fixed-td-width">
            <tr>
                <th>{$tableHeading1}</th>
                <th>{$tableHeading2}</th>
            </tr>
            <tr>
                <td>{$tableTerm1}</td>
                <td id="drop1" class="droppable"></td>
                <td id="drag1" class="draggable">{$tableDefinition1}</td>
            </tr>
            <tr>
                <td>{$tableTerm2}</td>
                <td id="drop2" class="droppable"></td>
                <td id="drag2" class="draggable">{$tableDefinition2}</td>
            </tr>
            <tr>
                <td>{$tableTerm3}</td>
                <td id="drop3" class="droppable"></td>
                <td id="drag3" class="draggable">{$tableDefinition3}</td>
            </tr>
            <tr>
                <td>{$tableTerm4}</td>
                <td id="drop4" class="droppable"></td>
                <td id="drag4" class="draggable">{$tableDefinition4}</td>
            </tr>
            <tr>
                <td>{$tableTerm5}</td>
                <td id="drop5" class="droppable"></td>
                <td id="drag5" class="draggable">{$tableDefinition5}</td>
            </tr>
            <tr>
                <td>{$tableTerm6}</td>
                <td id="drop6" class="droppable"></td>
                <td id="drag6" class="draggable">{$tableDefinition6}</td>
            </tr>
            <tr>
                <td>{$tableTerm7}</td>
                <td id="drop7" class="droppable"></td>
                <td id="drag7" class="draggable">{$tableDefinition7}</td>
            </tr>
            <tr>
                <td>{$tableTerm8}</td>
                <td id="drop8" class="droppable"></td>
                <td id="drag8" class="draggable">{$tableDefinition8}</td>
            </tr>
        </table>
    </div>
</div>
{* Footer einbinden *}
{include file="footer.tpl"}