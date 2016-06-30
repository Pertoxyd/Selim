{* Header einbinden *}
{include file="header.tpl"}

<h2>{$module_headline}</h2>
<div class="row">
    <div class="col-md-12">
        <p>{$text}</p>
    </div>
    <div class="col-md-12">
        <table class="table table-bordered">
            <tr>
                <td>
                    <p>{$textList1}</p>
                    <ul>
                        <li>{$list1term1}</li>
                        <li>{$list1term2}</li>
                        <li>{$list1term3}</li>
                        <li>{$list1term4}</li>
                    </ul>
                </td>
                <td>
                    <p>{$textList2}</p>
                    <ul>
                        <li>{$list2term1}</li>
                        <li>{$list2term2}</li>
                        <li>{$list2term3}</li>
                    </ul>
                </td>
            </tr>
        </table>
    </div>
</div>
{* Footer einbinden *}
{include file="footer.tpl"}