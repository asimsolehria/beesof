<?php

/**
 * Email Addresses
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/emails/email-addresses.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates\Emails
 * @version 5.6.0
 */

if (!defined('ABSPATH')) {
	exit;
}

$text_align = is_rtl() ? 'right' : 'left';
$address    = $order->get_formatted_billing_address();
$shipping   = $order->get_formatted_shipping_address();

?><table id="addresses" cellspacing="0" cellpadding="0" style="width: 100%; vertical-align: top; margin-bottom: 40px; padding:0;" border="0">



	<tr>
		<td class="side-pad" align="center">
			<table class="body" width="560" border="0" cellspacing="0" cellpadding="0">
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
																		<td valign="middle" class="column" width="270">
																			<span style="font-family: 'open-sans',sans-serif; font-size: 14px ; color: #9b9b9b ; line-height: 20px ; "><strong style="color: #000000">Billing address</strong><br />

																				<?php echo wp_kses_post($address ? $address : esc_html__('N/A', 'woocommerce')); ?>
																				<?php if ($order->get_billing_phone()) : ?>
																					<br /><?php echo wc_make_phone_clickable($order->get_billing_phone()); ?>
																				<?php endif; ?>
																				<?php if ($order->get_billing_email()) : ?>
																					<br /><?php echo esc_html($order->get_billing_email()); ?>
																				<?php endif; ?>

																			</span>
																		</td>
																		<td width="20" class="column">&nbsp;</td>
																		<?php if (!wc_ship_to_billing_address_only() && $order->needs_shipping_address() && $shipping) : ?>
																			<td width="270" class="column"><span style="font-family: 'open-sans',sans-serif; font-size: 14px ; color: #9b9b9b ; line-height: 20px ; "><strong style="color: #000000">Shipping address</strong>
																					<?php echo wp_kses_post($shipping); ?>
																					<?php if ($order->get_shipping_phone()) : ?>
																						<br /><?php echo wc_make_phone_clickable($order->get_shipping_phone()); ?>
																					<?php endif; ?></span>
																			</td>
																		<?php endif; ?>
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
</table>