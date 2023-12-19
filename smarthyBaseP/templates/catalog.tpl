<h4>Список товаров</h4>
<table border="2">
    <tr>
        <th>№</th>
        <th>Фото</th>
        <th>Название товара</th>
        <th>Цена</th>
        <th>Количество</th>
        <th>Характеристика</th>
    </tr>
    {section loop=$pages_items name=i}
        <tr><th>{$num++}</th>
            <th><img src="images/{$pages_items[i].photo}"width="100px"></th>
            <th>{$pages_items[i].name}</th>
            <th>{$pages_items[i].price}</th>
            <th>{if $pages_items[i].count>0}{$pages_items[i].count}<br><a href="Korzina.php?id={$pages_items[i].id}&mode=add&page={$active_page}">Заказать</a>{else}Нет на складе{/if}</th>
            <th><a href="items_inf.php?id={$pages_items[i].id}">Подробнее</a></th>
        </tr>
    {/section}
</table>
<table border="1"><tr>
    {if $active_page==1}
        <td> |<| </td>
        <td> |<<| </td>
        {else}
            <th><a href="katalog.php?page=1{if isset($idc)}&id_cat={$idc}{/if}"> < </a></th>
            <th><a href="katalog.php?page={$active_page-1}{if isset($idc)}&id_cat={$idc}{/if}"> << </a></th>
        {/if}
 _ at      <!---->
    {section loop=$page_num name=k}
        {if $active_page==$page_num[k].i}
<td>{$page_num[k].i}</td>
        {else}
                <td><a href="katalog.php?page={$page_num[k].i}{if isset($idc)}&id_cat={$idc}{/if}">{$page_num[k].i}</a></td>
            {/if}
    {/section}
        <!---->
{if $active_pages==$count_pages}
    <td> |>>| </td>
    <td> |>| </td>
    {else}
        <td><a href="katalog.php?page={$active_page+1}{if isset($idc)}&id_cat={$idc}{/if}"> >> </a></td>
        <td><a href="katalog.php?page={$count_pages}{if isset($idc)}&id_cat={$idc}{/if}"> > </a></td>
        {/if}
</tr></table>
