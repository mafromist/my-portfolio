<template>
	<div class="section" id="contact">
		<div class="section_inner">
			<div class="contact">
				<div class="main_title">
					<h3>Get in <span class="coloring">Touch</span></h3>
				</div>
				<div class="wrapper">
					<div class="left">
						<ul>
							<li>
								<div class="list_inner">
									<i class="icon-location"></i>
									<span><a href="#" class="href_location">Istanbul, Turkey</a></span>
								</div>
							</li>
							<!-- <li>
								<div class="list_inner">
									<i class="icon-phone"></i>
									<span><a href="#">+77 022 155 02 02</a></span>
								</div>
							</li> -->
							<li>
								<div class="list_inner">
									<i class="icon-mail-1"></i>
									<span><a href="mailto:example@gmail.com">muge.alev@me.com</a></span>
								</div>
							</li>
							<li>
								<div class="list_inner">
									<i class="icon-linkedin-rect"></i>
									<span><a href="https://www.linkedin.com/in/mugealev">@MugeAlev</a></span>
								</div>
							</li>
						</ul>
					</div>
					<div class="right">
						<div class="fields">
							<form action="/modal/contact.php" method="post" class="contact_form" id="contact_form">
								<div
									class="returnmessage"
									data-success="Your message has been received, We will contact you soon."></div>
								<div class="empty_notice">
									<span>Please Fill Required Fields</span>
								</div>
								<div class="first">
									<ul>
										<li>
											<div class="list_inner">
												<input id="name" name="name" type="text" placeholder="Name" autocomplete="off" />
											</div>
										</li>
										<li>
											<div class="list_inner">
												<input id="email" name="email" type="text" placeholder="Email" autocomplete="off" />
											</div>
										</li>
									</ul>
								</div>
								<div class="last">
									<textarea id="message" name="message" placeholder="Message"></textarea>
								</div>
								<div class="button">
									<a id="send_message" href="#">Send Message</a>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</template>

<script setup>
// Component using Composition API
</script>
