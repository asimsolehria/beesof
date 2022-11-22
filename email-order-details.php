<?php

/**
 * Order details table shown in emails.
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/emails/email-order-details.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates\Emails
 * @version 3.7.0
 */

defined('ABSPATH') || exit;


do_action('woocommerce_email_before_order_table', $order, $sent_to_admin, $plain_text, $email); ?>


<?php
if ($sent_to_admin) {
	$before = '<a class="link" href="' . esc_url($order->get_edit_order_url()) . '">';
	$after  = '</a>';
} else {
	$before = '';
	$after  = '';
}


$email_descriptions = array(
	"cancelled_order" => "Notification to let you know &mdash; order #{$order->get_order_number()} belonging to {$order->get_formatted_billing_full_name()} has been cancelled:",
	"failed_order" => "Payment for order #{$order->get_order_number()} from {$order->get_formatted_billing_full_name()} has failed. The order was as follows:",
	"new_order" => "You have a new order from {$order->get_formatted_billing_full_name()} .",
	"customer_completed_order" => "We have finished processing your order.",
	"customer_invoice" => "We have finished processing your order.",
	"customer_note" => "Here are your order details with note",
	"customer_note" => "Here are your order details with note",
	"customer_on_hold" => "Your order is on hold! details are as follows",
	"customer_processing_order" => "Your order is being processed!Order details below",
	"customer_refunded_order" => "Your order has been refunded",

)
?>




<tr>
	<td class="side-pad" align="center">
		<table class="body" width="560" border="0" cellspacing="0" cellpadding="0">
			<tbody>
				<tr>
					<td width="70%" style="font-family: 'open-sans',sans-serif; font-size: 14px ; color: #9b9b9b ; line-height: 20px ; ">
						<?php echo $email_descriptions[$email->id]; ?>
					</td>
					<td width="19%" valign="top" style="padding-top: 5px ; ">
						<table width="100%" border="0" cellspacing="0" cellpadding="0">
							<tbody>
								<tr>
									<td>
										<table width="100%" border="0" cellspacing="0" cellpadding="0">
											<tbody>
												<tr>
													<td width="45%" style="font-size: 14px ; color:  ; font-family: 'open-sans',sans-serif ;">
														Order</td>
													<td width="55%" bgcolor="#000000" style="padding: 5px ; font-size: 14px ; color: #FFFFFF ; font-family: 'open-sans',sans-serif ; border-radius: 10px ;  " align="center"><strong><?php echo $order->get_order_number(); ?></strong></td>
												</tr>
											</tbody>
										</table>
									</td>
								</tr>
							</tbody>
						</table>
					</td>
				</tr>
			</tbody>
		</table>
	</td>
</tr>
<tr>
	<td class="side-pad" align="center">&nbsp;</td>
</tr>
<tr>
	<td align="center">
		<table class="body" style="font-family: Arial, sans-serif; max-width: 600px; background-color: #fff; margin: 0px auto;" align="center" border="0" cellspacing="0" cellpadding="0" width="600">
			<tbody>
				<tr>
					<td align="center" bgcolor="#FFFFFF">
						<table class="container" align="center" border="0" cellspacing="0" cellpadding="0" width="600">
							<tbody>
								<tr>
									<td class="side-pad" align="center">
										<table class="body" width="560" border="0" cellspacing="0" cellpadding="0">
											<tbody>
												<tr>
													<td class="column">
														<table width="100%" border="0" cellspacing="0" cellpadding="0">
															<tbody>
																<tr>
																	<td class="column">&nbsp;</td>
																</tr>
															</tbody>
														</table>
													</td>
												</tr>
											</tbody>
										</table>
									</td>
								</tr>
								<?php do_action('woocommerce_email_customer_details', $order, $sent_to_admin, $plain_text, $email); ?>
								<tr>
									<td class="side-pad" align="center">&nbsp;</td>
								</tr>
								<tr>
									<td class="side-pad" align="center">
										<table class="body" style="font-family: Arial, sans-serif; max-width: 600px; background-color: #fff; margin: 0px auto;" align="center" border="0" cellspacing="0" cellpadding="0" width="600">
											<tbody>
												<tr>
													<td align="center" bgcolor="#FFFFFF">
														<table class="container" align="center" border="0" cellspacing="0" cellpadding="0" width="600">
															<tbody>
																<tr>
																	<td align="center">
																		<table class="body" width="560" border="0" cellspacing="0" cellpadding="0">
																			<tbody>
																				<tr>
																					<td class="column">
																						<table class="body" width="100%" border="0" cellspacing="0" cellpadding="0">
																							<tbody>
																								<tr>
																									<td class="column">
																										<table width="100%" border="0" cellspacing="0" cellpadding="0">
																											<tbody>
																												<tr>
																													<td style="font-family: 'open-sans',sans-serif ;font-size: 14px ; padding: 8px ; line-height: 22px ; border: 1px solid #f5b316; border-radius: 5px;  display: block   " bgcolor="#fef9e6"><img src="https://beesof.com/wp-content/uploads/2022/11/bell.png" width="12" alt="" />&nbsp;<strong>IMPORTANTE</strong>:
																														Cuentas con <strong>15</strong> días
																														para validar el producto (instalar y
																														activar). Si necesitas ayuda, por
																														favor comunícate con nuestro equipo de
																														soporte en horario laboral.</td>
																												</tr>
																											</tbody>
																										</table>
																									</td>
																								</tr>
																							</tbody>
																						</table>
																					</td>
																				</tr>
																			</tbody>
																		</table>
																	</td>
																</tr>
																<tr>
																	<td class="side-pad" align="center">&nbsp;</td>
																</tr>
																<tr>
																	<td align="center">
																		<table class="body" width="560" border="0" cellspacing="0" cellpadding="0">
																			<tbody>
																				<tr>
																					<td class="column">
																						<table width="100%" border="0" cellspacing="0" cellpadding="0">
																							<tbody>
																								<tr>
																									<td class="column">
																										<table width="100%" border="0" cellspacing="0" cellpadding="0">
																											<tbody>
																												<tr>
																													<td width="332" valign="middle" class="column" style="font-family: 'open-sans',sans-serif ;font-size: 14px ;">
																														<strong>Artículo</strong>
																													</td>
																													<td width="10">&nbsp;</td>
																													<td width="221" align="center">
																														<table width="100%" border="0" cellspacing="0" cellpadding="0">
																															<tbody>
																																<tr>
																																	<td width="50%" style="font-family: 'open-sans',sans-serif ;font-size: 14px ;">
																																		<strong>Cantidad</strong>
																																	</td>
																																	<td width="50%">
																																		<strong>Precio</strong>
																																	</td>
																																</tr>
																															</tbody>
																														</table>
																													</td>
																												</tr>
																											</tbody>
																										</table>
																									</td>
																								</tr>
																							</tbody>
																						</table>
																					</td>
																				</tr>
																			</tbody>
																		</table>
																	</td>
																</tr>
																<tr>
																	<td class="side-pad" align="center">&nbsp;</td>
																</tr>
																<tr>
																	<td class="side-pad" align="center">
																		<table class="body" width="560" border="0" cellspacing="0" cellpadding="0">
																			<tbody>
																				<tr>
																					<td class="column" style="border-top: 1px solid #f5f5f5 ; font-size: 10px ; ">
																						&nbsp;</td>
																				</tr>
																			</tbody>
																		</table>
																	</td>
																</tr>
																<!-- email order item goes here -->
																<?php
																echo wc_get_email_order_items( // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
																	$order,
																	array(
																		'show_sku'      => $sent_to_admin,
																		'show_image'    => true,
																		'image_size'    => array(32, 32),
																		'plain_text'    => $plain_text,
																		'sent_to_admin' => $sent_to_admin,
																	)
																);
																?>
																<tr>
																	<td class="side-pad" align="center" style="font-size: 10px ; ">
																		&nbsp;</td>
																</tr>
																<tr>
																	<td class="side-pad" align="center">
																		<table class="body" width="560" border="0" cellspacing="0" cellpadding="0">
																			<tbody>
																				<tr>
																					<td class="column" style="border-top: 1px solid #f5f5f5; font-size: 10px ; ">
																						&nbsp;</td>
																				</tr>
																			</tbody>
																		</table>
																	</td>
																</tr>

																<tr>
																	<td class="side-pad" align="center" style="font-size: 10px ; ">
																		&nbsp;</td>
																</tr>

																<tr>
																	<td align="center">
																		<table class="body" width="560" border="0" cellspacing="0" cellpadding="0">
																			<tbody>
																				<tr>
																					<td class="column">
																						<table width="100%" border="0" cellspacing="0" cellpadding="0">
																							<tbody>
																								<tr>
																									<td class="column">
																										<table class="body" width="560" border="0" cellspacing="0" cellpadding="0">
																											<tbody>
																												<tr>
																													<td class="column">
																														<table width="100%" border="0" cellspacing="0" cellpadding="0">
																															<tbody>
																																<tr>
																																	<td class="column">
																																		<table width="100%" border="0" cellspacing="0" cellpadding="0">
																																			<tbody>
																																				<?php
																																				$item_totals = $order->get_order_item_totals();

																																				if ($item_totals) {
																																					$i = 0;
																																					foreach ($item_totals as $total) {
																																						$i++;
																																						if (($total['label']) === "Total:") {
																																							continue;
																																						}
																																				?>

																																						<tr>
																																							<td width="332" valign="middle" class="column" style="font-family: 'open-sans',sans-serif ;font-size: 14px ;">
																																								&nbsp;</td>
																																							<td width="10" class="column">&nbsp;
																																							</td>
																																							<td width="221" align="center">
																																								<table width="100%" border="0" cellspacing="0" cellpadding="0">
																																									<tbody>
																																										<tr>
																																											<td width="50%" style="font-family: 'open-sans',sans-serif ;font-size: 14px ;">
																																												<strong><?php echo wp_kses_post($total['label']); ?></strong>
																																											</td>
																																											<td width="50%">
																																												<?php echo wp_kses_post($total['value']); ?></td>
																																										</tr>
																																									</tbody>
																																								</table>
																																							</td>
																																						</tr>
																																					<?php
																																					}
																																				}
																																				if ($order->get_customer_note()) {
																																					?>
																																					<tr>
																																						<th class="td" scope="row" colspan="2" style="text-align:<?php echo esc_attr($text_align); ?>;"><?php esc_html_e('Note:', 'woocommerce'); ?></th>
																																						<td class="td" style="text-align:<?php echo esc_attr($text_align); ?>;"><?php echo wp_kses_post(nl2br(wptexturize($order->get_customer_note()))); ?></td>
																																					</tr>
																																				<?php
																																				}
																																				?>
																																			</tbody>
																																		</table>
																																	</td>
																																</tr>
																															</tbody>
																														</table>
																													</td>
																												</tr>
																											</tbody>
																										</table>
																									</td>
																								</tr>
																							</tbody>
																						</table>
																					</td>
																				</tr>
																			</tbody>
																		</table>
																	</td>
																</tr>


																<tr>
																	<td class="side-pad" align="center" style="font-size: 10px ; ">
																		&nbsp;</td>
																</tr>
																<tr>
																	<td class="side-pad" align="center">
																		<table class="body" width="560" border="0" cellspacing="0" cellpadding="0">
																			<tbody>
																				<tr>
																					<td class="column" style="border-top: 1px solid #f5f5f5 ; font-size: 10px ; ">
																						&nbsp;</td>
																				</tr>
																			</tbody>
																		</table>
																	</td>
																</tr>
																<tr>
																	<td align="center">
																		<table class="body" width="560" border="0" cellspacing="0" cellpadding="0">
																			<tbody>
																				<tr>
																					<td class="column">
																						<table width="100%" border="0" cellspacing="0" cellpadding="0">
																							<tbody>
																								<tr>
																									<td class="column">
																										<table class="body" width="560" border="0" cellspacing="0" cellpadding="0">
																											<tbody>
																												<tr>
																													<td class="column">
																														<table width="100%" border="0" cellspacing="0" cellpadding="0">
																															<tbody>
																																<tr>
																																	<td class="column">
																																		<table width="100%" border="0" cellspacing="0" cellpadding="0">
																																			<tbody>
																																				<tr>
																																					<td width="332" valign="middle" class="column" style="font-family: 'open-sans',sans-serif ;font-size: 14px ;">
																																						&nbsp;</td>
																																					<td width="10" class="column">&nbsp;
																																					</td>
																																					<td width="221" align="center">
																																						<table width="100%" border="0" cellspacing="0" cellpadding="0">
																																							<tbody>
																																								<tr>
																																									<td width="50%" style="font-family: 'open-sans',sans-serif ;font-size: 14px ;">
																																										<strong>Totaal</strong>
																																									</td>
																																									<td width="50%">
																																										<strong><?php echo $order->get_formatted_order_total(); ?></strong>
																																									</td>
																																								</tr>
																																							</tbody>
																																						</table>
																																					</td>
																																				</tr>
																																			</tbody>
																																		</table>
																																	</td>
																																</tr>
																															</tbody>
																														</table>
																													</td>
																												</tr>
																											</tbody>
																										</table>
																									</td>
																								</tr>
																							</tbody>
																						</table>
																					</td>
																				</tr>
																			</tbody>
																		</table>
																	</td>
																</tr>
																<tr>
																	<td class="side-pad" align="center">&nbsp;</td>
																</tr>
																<tr>
																	<td align="center"></td>
																</tr>
																<tr>
																	<td align="center"></td>
																</tr>
															</tbody>
														</table>
													</td>
												</tr>
											</tbody>
										</table>
									</td>
								</tr>
								<tr>
									<td align="center"></td>
								</tr>
								<tr>
									<td align="center"></td>
								</tr>
							</tbody>
						</table>
					</td>
				</tr>
			</tbody>
		</table>
	</td>
</tr>

</tbody>
</table>
</td>
</tr>
</tbody>
</table>
</td>
</tr>
<tr>
	<td align="center" valign="top" bgcolor="#f7f7f7">
		<table class="body" style="font-family: Arial, sans-serif; max-width: 600px; background-color: #fff; margin: 0px auto;" align="center" border="0" cellspacing="0" cellpadding="0" width="600">
			<tbody>
				<tr>
					<td align="center" bgcolor="#FFFFFF">
						<table class="container" align="center" border="0" cellspacing="0" cellpadding="0" width="600">
							<tbody>
								<tr>
									<td class="column" align="center"></td>
								</tr>
							</tbody>
						</table>
					</td>
				</tr>
			</tbody>
		</table>
	</td>
</tr>
<tr>
	<td align="center" valign="top" bgcolor="#f7f7f7">&nbsp;</td>
</tr>

















<?php do_action('woocommerce_email_after_order_table', $order, $sent_to_admin, $plain_text, $email); ?>