{**
 * 2007-2018 PrestaShop
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/OSL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to http://www.prestashop.com for more information.
 *
 * @author    PrestaShop SA <contact@prestashop.com>
 * @copyright 2007-2018 PrestaShop SA
 * @license   https://opensource.org/licenses/OSL-3.0 Open Software License (OSL 3.0)
 * International Registered Trademark & Property of PrestaShop SA
 *}
<table id="summary-tab" width="100%">
	<tr>
		<th class="header small" valign="middle">{l s='Order Reference' d='Shop.Pdf' pdf='true'}</th>
		<th class="header small" valign="middle">{l s='Order Date' d='Shop.Pdf' pdf='true'}</th>
		<th class="header small" valign="middle">{l s='Date de retrait' d='Shop.Pdf' pdf='true'}</th>
		<th class="header small" valign="middle">{l s='Heure de retrait' d='Shop.Pdf' pdf='true'}</th>
		<th class="header small" valign="middle">{l s='Boutique de retrait' d='Shop.Pdf' pdf='true'}</th>
		{if isset($carrier)}
			
		{/if}
	</tr>
	<tr>
		<td class="center small white">{$order->getUniqReference()}</td>
		<td class="center small white">{dateFormat date=$order->date_add full=0}</td>
		<td class="center small white">{$order->date_retrait|date_format:"%d/%m/%y"}</td>
		<td class="center small white">{$order->heure_retrait}</td>
		{if $order->boutique_retrait == 2}
			<td class="center small white">Bordeaux Bègles</td>
		{/if}
		{if $order->boutique_retrait == 3}
			<td class="center small white">Saint-Médard-en-Jalles</td>
		{/if}
		{if $order->boutique_retrait == 4}
			<td class="center small white">Bordeaux Bègles</td>
		{/if}
		{if $order->boutique_retrait == 5}
			<td class="center small white">Saint-Médard-en-Jalles</td>
		{/if}
		{if $order->boutique_retrait == 6}
			<td class="center small white">Canéjan</td>
		{/if}
		{if isset($carrier)}
			
		{/if}
	</tr>
</table>

