<?php
/**
 *
 * Template Name: CXMaturity Assessment Page
 *
 * @package      Page Template
 * @author       Eric Lukavsky <elukavsky@anexinet.com>
 * @copyright    Copyright (c) 2016, Anexinet
 * @license      http://opensource.org/licenses/gpl-2.0.php GNU Public License
 *
 */
  get_header();
  ?>
  

		<div class="content-wrapper" id="cxmaturityAssessment">
			<section class="intro">
				<div class="intro__title">
					<h1>Get Your <span>Customer Experience Maturity Assessment</span> Score Now!</h1>
				</div>
				<div class="intro__video">
					<img src="/wp-content/themes/anexinet/public/images/cxmaturity/CXMaturityHero.png" alt="CXMaturity Assessment Video" />
					<!--p>Click Play above to hear Steve Tranchida discuss the many benefits of Anexinet's Customer Experience Maturity Model.</p>
					<button class="intro__playVideo" type="button"><i class="fa fa-play"></i></button-->
				</div>
				<div class="intro__content">
					<p>The bar on Customer Experience standards is raised higher with each passing day. Consumers want results faster, easier, and everywhere. In short, <strong>they expect amazing</strong>.</p>
					<p>A critical tool in our <strong>Digital Envisioning</strong> process, a Maturity Assessment quickly identifies any capability gaps to enable a more informed prioritization of initiatives, and is the first step towards transforming your customer engagement practices.</p>
					<p>Our proprietary CX Maturity Model gathers hundreds of data points across four foundational competencies essential to beating the competition:</p>

					<ul style="display: flex; flex-flow: row wrap; justify-content: flex-start; margin-left: 0; padding: 0;">
						<li style="list-style: none; margin-right: 2rem;">Experiences</li>
						<li style="margin-right: 2rem;">Insights</li>
						<li style="margin-right: 2rem;">Technology</li>
						<li>Process</li>
					</ul>

					<p>Please take a moment to assess the Maturity of your organization’s Customer Experience now with this interactive preview of the full assessment tool.</p>

					<div class="intro__buttons start">
						<a class="btn btn--start" href="#digital-channels">Let's Begin</a>
					</div>

					<div class="intro__buttons resume" style="display: none;">
						<a class="btn btn--start" href="#digital-channels">Start Over</a>
						<a class="btn btn--resume" href="#digital-channels">Resume</a>
					</div>
				</div>
			</section>
			<section class="form is-hidden">
				<div class="form-chart-wrapper">
					<div class="form__chart form__chart--fullChart">
						<button class="btn btn--experiences" data-chart="experiences" type="button">Experiences</button>
						<button class="btn btn--fullChart" data-chart="fullChart" type="button"><img src="/wp-content/themes/anexinet/public/images/cxmaturity/icons/chart_back_btn.png" alt="chart icon" /></button>
						<button class="btn btn--insights" data-chart="insights" type="button" disabled>Insights</button>
						<button class="btn btn--process" data-chart="process" type="button" disabled>Process</button>
						<button class="btn btn--technology" data-chart="technology" type="button" disabled>Technology</button>
						<div class="lockedContent">
							<span class="lock--insights"></span>
							<span class="lock--process"></span>
							<span class="lock--technology"></span>
						</div>
					</div>
					<div class="form__chartDetails">
						<div class="form__chartKey">
							<span class="minimal"><i class="fa fa-square"></i> Minimal</span>
							<span class="emerging"><i class="fa fa-circle"></i> Emerging</span>
							<span class="engaging"><i class="fa fa-caret-down"></i> Engaging</span>
							<span class="leading"><i class="fa fa-caret-up"></i> Leading</span>
						</div>
						<div class="form__chartAfter">
							<p>As you proceed through the assessment, your current maturity levels are plotted. Each core competency is represented in its own quadrant.  Scores are visualized against the maturity benchmark levels of "<b>Minimal</b>," "<b>Emerging</b>," "<b>Engaging</b>," and "<b>Leading</b>."</p>
							<div class="form__learnMore">
								<!--button class="btn" type="button">Learn More</button-->
								<div class="dummyChart">
									<img src="/wp-content/themes/anexinet/public/images/cxmaturity/DummyChart.png" alt="dummy chart" />
									<div class="dummyChart__button btn">Technology</div>
								</div>
								<div class="dummyChart">
									<img src="/wp-content/themes/anexinet/public/images/cxmaturity/DummyChart.png" alt="dummy chart" />
									<div class="dummyChart__button btn">Insights</div>
								</div>
								<div class="dummyChart">
									<img src="/wp-content/themes/anexinet/public/images/cxmaturity/DummyChart.png" alt="dummy chart" />
									<div class="dummyChart__button btn">Organization</div>
								</div>
							</div>
						</div>
					</div>
					<button class="form__chartDetailsToggle" type="button"></button>
				</div>

				<form id="cxmaturity">
					<div class="form-navbar">
						<h3>Experiences</h3>
						<ul class="navbar">
						</ul>
					</div>
					<fieldset data-fieldset="reach" id="fieldset-0" style="display: block;">
						<div class="question master required is-selected" id="digital-channels" data-question="Digital Channels" style="display: block;">
							<div class="question__text animated"><b>Let's begin by selecting all channels below that you are actively using for digital engagement with customers.</b></div>
							<div class="question__options">
							</div>
							<div class="question__buttons">
								<button class="btn btn--next" data-direction="next" type="button" disabled>Next</button>
								<button class="btn btn--clear" type="button">Clear</button>
							</div>
						</div>
						<div class="question required" id="digital-and-physical" data-question="Digital and Physical">
							<div class="question__text animated">
								<p><b>Please indicate your level of agreement with the following statement:</b><br />
								Your company uses both digital and physical channels in a complementary, unified and highly integrated fashion to enhance the overall customer experience across journeys.</p>
							</div>
							<div class="question__options">
								<label class="radio size-5 animated" for="stronglyDisagree">
									<input data-modifier="0.1" id="stronglyDisagree" name="reachModifier" type="radio" value="Strongly Disagree" />Strongly <br />Disagree
									<span class="icon-group">
										<i class="fa fa-thumbs-down"></i>
										<i class="fa fa-thumbs-down"></i>
									</span>
								</label>
								<label class="radio size-5 animated" for="somewhatDisagree">
									<input data-modifier="0.3" id="somewhatDisagree" name="reachModifier" type="radio" value="Somewhat Disagree" />Somewhat <br />Disagree
									<span class="icon-group">
										<i class="fa fa-thumbs-down"></i>
									</span>
								</label>
								<label class="radio size-5 animated" for="somewhatAgree">
									<input data-modifier="0.65" id="somewhatAgree" name="reachModifier" type="radio" value="Somewhat Agree" />Somewhat <br />Agree
									<span class="icon-group">
										<i class="fa fa-thumbs-up"></i>
									</span>
								</label>
								<label class="radio size-5 animated" for="stronglyAgree">
									<input data-modifier="0.9" id="stronglyAgree" name="reachModifier" type="radio" value="Strongly Agree" />Strongly <br />Agree
									<span class="icon-group">
										<i class="fa fa-thumbs-up"></i>
										<i class="fa fa-thumbs-up"></i>
									</span>
								</label>
							</div>
							<div class="question__buttons">
								<button class="btn btn--next" data-direction="next" type="button" disabled>Next</button>
								<button class="btn btn--prev" data-direction="prev" type="button">Previous</button>
								<button class="btn btn--clear" type="button">Clear</button>
							</div>
						</div>
					</fieldset>
				</form>
			</section>
			<section class="results is-hidden">
				<div class="results__chart">
					<div class="form-chart-wrapper">
						<div class="form__chart form__chart--fullChart">
							<button class="btn btn--experiences" data-chart="experiences" type="button">Experiences</button>
							<button class="btn btn--fullChart" data-chart="fullChart" type="button"><img src="/wp-content/themes/anexinet/public/images/cxmaturity/icons/chart_back_btn.png" alt="chart icon" /></button>
							<button class="btn btn--insights" data-chart="insights" type="button" disabled>Insights</button>
							<button class="btn btn--process" data-chart="process" type="button" disabled>Process</button>
							<button class="btn btn--technology" data-chart="technology" type="button" disabled>Technology</button>
							<div class="lockedContent">
								<span class="lock--insights"></span>
								<span class="lock--process"></span>
								<span class="lock--technology"></span>
							</div>
						</div>
						<div class="form__chartDetails">
							<div class="form__chartKey">
								<span class="minimal">&#9632; Minimal</span>
								<span class="emerging">&#9632; Emerging</span>
								<span class="engaging">&#9632; Engaging</span>
								<span class="leading">&#9632; Leading</span>
							</div>
							<div class="form__chartAfter">
								<p>As you proceed through the assessment, your current maturity levels are plotted. Each core competency is represented in its own quadrant.  Scores are visualized against the maturity benchmark levels of "<b>Minimal</b>", "<b>Emerging</b>", "<b>Engaging</b>", and "<b>Leading</b>".</p>
								<div class="form__learnMore">
									<!--button class="btn" type="button">Learn More</button-->
									<div class="dummyChart">
										<img src="/wp-content/themes/anexinet/public/images/cxmaturity/DummyChart.png" alt="dummy chart" />
										<div class="dummyChart__button btn">Technology</div>
									</div>
									<div class="dummyChart">
										<img src="/wp-content/themes/anexinet/public/images/cxmaturity/DummyChart.png" alt="dummy chart" />
										<div class="dummyChart__button btn">Insights</div>
									</div>
									<div class="dummyChart">
										<img src="/wp-content/themes/anexinet/public/images/cxmaturity/DummyChart.png" alt="dummy chart" />
										<div class="dummyChart__button btn">Organization</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="results__content">
					<div>
						<h2>YOUR CUSTOMER EXPERIENCE MATURITY ASSESSMENT</h2>
						<h3 style="margin-top: 2rem;">Your Experience Score: <br /><span class="overall-score">48.266</span></h3>
						<p>By completing Anexinet's online preview of our CX Maturity Model, you have obtained important insight into one of these competencies - the <i>Experiences</i> quadrant.</p>
						<p>To obtain a complete Analysis (PDF) of your customer experience assessment results, please provide your contact information.</p>
					</div>

					<div class="results__form" id="hbspt-77502647-af3d-45e9-86d4-6b79b6a59de2">
						<form novalidate="" accept-charset="UTF-8" method="POST" class="hs-form" data-form-id="77502647-af3d-45e9-86d4-6b79b6a59de2" data-portal-id="3474660" data-reactid=".hbspt-forms-0" _lpchecked="1">
							<div class="hs-email hs-form-field" data-reactid=".hbspt-forms-0.0:$0">
								<label id="label-email-77502647-af3d-45e9-86d4-6b79b6a59de2" class="" placeholder="Enter your Email" for="email-77502647-af3d-45e9-86d4-6b79b6a59de2" data-reactid=".hbspt-forms-0.0:$0.0">
									<span data-reactid=".hbspt-forms-0.0:$0.0.0">Your Company Email</span>
								</label>
								<legend class="hs-field-desc" style="display:none;" data-reactid=".hbspt-forms-0.0:$0.1"></legend>
								<div class="input" data-reactid=".hbspt-forms-0.0:$0.$email">
									<input id="email-77502647-af3d-45e9-86d4-6b79b6a59de2" class="hs-input" type="email" name="email" required="" placeholder="" value="" autocomplete="email" data-reactid=".hbspt-forms-0.0:$0.$email.0">
									<ul class="hs-error-msgs inputs-list" role="alert" data-reactid=".hbspt-forms-0.0:$0.3">
										<li data-reactid=".hbspt-forms-0.0:$0.3.$0">
											<label data-reactid=".hbspt-forms-0.0:$0.3.$0.0">Please provide a valid company email address.</label>
										</li>
									</ul>
								</div>
							</div>
							<div class="hs-fname hs-form-field" data-reactid=".hbspt-forms-0.0:$1">
								<label placeholder="First name" for="firstname-77502647-af3d-45e9-86d4-6b79b6a59de2">
									<span data-reactid=".hbspt-forms-0.0:$1.0.0">First Name <span style="font-size: 10px;">(optional)</span></span>
								</label>
								<div class="input">
									<input id="firstname-77502647-af3d-45e9-86d4-6b79b6a59de2" class="hs-input" type="text" name="firstname" value="" />
								</div>
							</div>
							<div class="hs-lname hs-form-field" data-reactid=".hbspt-forms-0.0:$1">
								<label placeholder="Last name" for="lastname-77502647-af3d-45e9-86d4-6b79b6a59de2">
									<span data-reactid=".hbspt-forms-0.0:$1.0.0">Last Name <span style="font-size: 10px;">(optional)</span></span>
								</label>
								<div class="input">
									<input id="lastname-77502647-af3d-45e9-86d4-6b79b6a59de2" class="hs-input" type="text" name="lastname" value="" />
								</div>
							</div>
							<div class="hs-phone hs-form-field" data-reactid=".hbspt-forms-0.0:$1">
								<label id="label-phone-77502647-af3d-45e9-86d4-6b79b6a59de2" class="" placeholder="Enter your Phone Number" for="phone-77502647-af3d-45e9-86d4-6b79b6a59de2" data-reactid=".hbspt-forms-0.0:$1.0">
									<span data-reactid=".hbspt-forms-0.0:$1.0.0">Phone Number <span style="font-size: 10px;">(optional)</span></span>
								</label>
								<div class="input" data-reactid=".hbspt-forms-0.0:$1.$phone">
									<input id="phone-77502647-af3d-45e9-86d4-6b79b6a59de2" class="hs-input" type="tel" name="phone" value="" placeholder="" autocomplete="tel" data-reactid=".hbspt-forms-0.0:$1.$phone.0">
								</div>
							</div>
							<div class="hs-company hs-form-field" data-reactid=".hbspt-forms-0.0:$1">
								<label placeholder="Company" for="company-77502647-af3d-45e9-86d4-6b79b6a59de2">
									<span data-reactid=".hbspt-forms-0.0:$1.0.0">Company <span style="font-size: 10px;">(optional)</span></span>
								</label>
								<div class="input">
									<input id="company-77502647-af3d-45e9-86d4-6b79b6a59de2" class="hs-input" type="text" name="company" value="" />
								</div>
							</div>
							<div class="hs_cx_maturity_assessment_score hs-cx_maturity_assessment_score hs-fieldtype-text field hs-form-field" style="display:none;" data-reactid=".hbspt-forms-0.0:$2">
								<label id="label-cx_maturity_assessment_score-77502647-af3d-45e9-86d4-6b79b6a59de2" class="" placeholder="Enter your " for="cx_maturity_assessment_score-77502647-af3d-45e9-86d4-6b79b6a59de2" data-reactid=".hbspt-forms-0.0:$2.0">
									<span data-reactid=".hbspt-forms-0.0:$2.0.0"></span>
								</label>
								<div class="input" data-reactid=".hbspt-forms-0.0:$2.$cx_maturity_assessment_score">
									<input name="cx_maturity_assessment_score" class="hs-input" type="hidden" value="" data-reactid=".hbspt-forms-0.0:$2.$cx_maturity_assessment_score.0">
								</div>
							</div>
							<div class="hs_submit hs-submit" data-reactid=".hbspt-forms-0.3">
								<div class="hs-field-desc" style="display:none;" data-reactid=".hbspt-forms-0.3.0"></div>
								<div class="actions" data-reactid=".hbspt-forms-0.3.1">
									<input type="submit" value="Download My Report" class="hs-button primary large" data-reactid=".hbspt-forms-0.3.1.0" style="width: auto;">
								</div>
							</div>
							<input name="hs_context" type="hidden" value="" data-reactid=".hbspt-forms-0.4">
						</form>
					</div>
				</div>
			</section>
		</div>

		<section id="resultsPrint">
			<div class="intro">
				<h1>Customer experience (CX) is defined by the quality of all customer interactions with your company.</h1>

				<p style="margin-bottom: 8px;"><strong>Better customer experiences result in better business results</strong> &mdash; more customers, increased sales and greater loyalty. In today's world, the quality of a customer's digital experiences is equal to, or more important than, that customer's physical in-person experiences. Yet many companies still lag behind when it comes to providing digital experiences that differentiate them in the marketplace and bring competitive advantage.</p>

				<div class="content-from-right" style="height: 300px; margin-bottom: 0; margin-top: 0; padding-top: 10px;">
					<div class="float-wrap">
						<div style="display: inline-block; width: 365px;">
							<p style="font-size: 20px; line-height: 24px; margin-bottom: 12px; padding: 0;">Anexinet's Customer Experience Maturity Model identifies four critical disciplines.</p>
							<ul style="font-weight: 300; list-style: none; margin: 0; padding: 0;">
								<li><strong>Experiences:</strong> The actual interactions between you and your customers</li>
								<li><strong>Insights:</strong> The information (data and analytics) captured and used to optimize customer experiences</li>
								<li><strong>Technology:</strong> The digital technology powering your customer experiences</li>
								<li><strong>Process:</strong> The operational processes supporting the customer experiences</li>
							</ul>
						</div>

						<div class="circle" style="background: none; right: 20px; top: -25px;; width: 320px;">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/public/images/cxmaturity/four-quadrants.png" />
						</div>
					</div>
				</div>
			</div>

			<div class="arrow-container" style="background-color: #90E0F1;">
				<div class="blue-line-right" style="margin-top: -16px;">
					<p style="background: #f3f4f4; margin-bottom: 0; padding-right: 64px; padding-top: 28px;">Understanding your company's maturity level in these four areas is an important <br />step to identifying capability gaps and building a roadmap for improving the customer experience. Completing our Maturity Assessment preview is a simple, solid first step. This online preview offers an abbreviated assessment of the Experiences discipline. A detailed assessment of all four disciplines is available via <a href="https://www.anexinet.com/services/customer-engagement/">Anexinet's Customer Experience Kickstart</a> engagement.</p>
				</div>

				<div class="blue-line-right" style="border-radius: 0 0 18px 0;">
					<div style="background: #f3f4f4; padding-top: 48px;">
						<div class="bg-dark-blue" style="border-radius: 128px 6px 6px 0; height: 736px; padding-bottom: 32px; position: relative; width: 765px;">
							<div class="float-wrap">
								<div class="circle" id="svgChartAll" style="margin: -30px 20px 0 0; padding: 8px;"></div>

								<div style="padding-right: 20px; padding-top: 32px; position: absolute; right: 0; top: 0; width: 425px;">
									<h2>The Maturity Model</h2>
									<p style="color: #5DC5DB; font-size: 16px; font-weight: 500; margin: 0; padding-left: 0; padding-right: 0;">Anexinet's CX Maturity Model provides an assessment of your digital Customer Experience capabilities. Individual responses are weighted and scored to produce a ranking at one of the following levels:</p>
								</div>
							</div>
							<div class="levels">
								<div class="level">
									<div class="level__title" style="background: #A400A4; background: linear-gradient(0deg, #860086 0%, #a200a2 100%);">Minimal</div>
									<div class="level__content">
										The bottom 25% relative to other companies. An overall ranking in the Minimal range indicates you are just beginning your digital transformation journey as it relates to customer experience. Launching a holistic Customer Experience Strategy initiative is the recommended next step.
									</div>
								</div>
								<div class="level">
									<div class="level__title" style="background: #F70000; background: linear-gradient(0deg, #ca0000 0%, #f40000 100%);">Emerging</div>
									<div class="level__content">
										Indicates you offer some table stake capabilities for digital customer engagement. Though below average (25th - 50th percentile), this ranking indicates your customers do have some capabilities to interact with you via digital interfaces. An Emerging ranking can indicate, for example, that you offer web self-service but not mobile. Recommended next step is adopting a Digital Customer Experience enhancement strategy. 
									</div>
								</div>
								<div class="level">
									<div class="level__title" style="background: #FD6601; background: linear-gradient(0deg, #cf5300 0%, #fa6400 100%);">Engaging</div>
									<div class="level__content">
										Your digital customer engagement capabilities are above average (50th - 75th percentile). Congratulations. Your company has done a commendable job with its digital transformation and you are poised to realize the many business benefits. Having achieved this level, you are in a great position to advance to the Leaders quadrant. Recommended next steps include pursuing targeted initiatives to close any remaining gaps and graduate to the top tier of digital leaders.  
									</div>
								</div>
								<div class="level">
									<div class="level__title" style="background: #F8E71C; background: linear-gradient(0deg, #cbbd16 0%, #f6e41b 100%);">Leading</div>
									<div class="level__content">
										Your company is a leader in digital engagement. Ranking in the top 25th percentile means both you and your customers are benefiting from the digital initiatives you have completed.  Recommended next steps are to avoid complacency by continuing to invest in the maintenance and enhancement of digital platforms and interfaces. Remember, the only thing advancing faster than technology is customer expectations!  
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="blue-line-left" style="padding-top: 32px; position: relative">
					<div class="score-rounded-corner"></div>
					<div style="background: #f3f4f4; border-radius: 18px 0 0 0; padding-top: 48px;">
						<div class="bg-dark-blue" style="border-radius: 6px 128px 0 6px; height: 800px; margin-left: -30px; padding: 0 0 32px 0; position: relative; width: 764px;">
							<div class="float-wrap" style="display: relative;">
								<div style="display: inline-block; padding-right: 20px; padding: 16px 0 0 20px; position: absolute; width: 405px;">
									<h2 style="font-weight: bold;">Your Experiences Score</h2>
									<div class="overall-score">48.266</div>
									<p style="color: #5DC5DB; font-size: 16px; font-weight: 500; margin: 0; padding: 0 0 20px 0;">The Experiences quadrant measures the depth and breadth of digital interaction capabilities you currently offer customers. The assessment focuses on reach, capabilities and design.  </p>
								</div>

								<div class="circle" id="svgChartSingle" style="background-color: #0C5797; display: inline-block; height: 310px; padding: 8px; position: absolute; right: 2px; top: -48px; width: 310px;"></div>
							</div>
							<div class="scores">
								<div class="score">
									<div class="score__title">
										Reach
										<div class="score__value">
											<span class="reach" data-score="42" style="width: 42%;"></span>
										</div>
									</div>
									<div class="score__content">
										Digital reach assesses whether or not your digital interfaces span all the possible ways in which customers may want to engage, depending on their context and preferences. The key is to ensure convenient engagement options exist at every stage of the customer journey. Digital and physical engagement points should also be highly complementary.  
									</div>
								</div>
								<div class="score">
									<div class="score__title">
										Capabilities
										<div class="score__value">
											<span class="capabilities" data-score="71" style="width: 71%;"></span>
										</div>
									</div>
									<div class="score__content">
										The capabilities assessment evaluates the range of content and features you offer to customers through digital channels. Helpful information, fresh and timely content and innovative features lead to increased engagement. A more engaged customer is likely to be a more satisfied and higher value customer.
									</div>
								</div>
								<div class="score">
									<div class="score__title">
										Design
										<div class="score__value">
											<span class="design" data-score="34" style="width: 34%;"></span>
										</div>
									</div>
									<div class="score__content">
										Emotion is a powerful motivator. Customer Experience leaders excel at making emotional connections during their interactions. For digital interfaces, this means employing professional design aesthetics that are highly consistent with your brand. It also means designing interfaces that are simple, consistent, task-oriented and highly satisfying to use. Most importantly, digital interfaces need to be highly responsive. During an in-person encounter, a consumer will typically tolerate waiting a few minutes for service. Online consumers are far less patient and forgiving.
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="arrow-end">
				<span class="arrow-right"></span>
				<p>Questions related to <span style="color: #F5A623; font-size: 20px;">Digital Reach</span> are assessing the breadth of your interaction capabilities. Today's consumers demand multiple options for digital engagement so that they can engage wherever and whenever they decide. These engagement options are often referred to as Digital Channels. By providing multiple channel options, consumers can select the interface that is most convenient depending preferences, location, current objectives and other factors.</p>
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/public/images/cxmaturity/devices_01.png" />
			</div>

			<div class="content-from-right" style="margin-bottom: 0; margin-top: -16px; padding: 10px 20px;">
				<h2 style="padding-bottom: 8px;">Your Digital Reach Maturity Level: <span class="maturity-level--reach">Emerging</span></h2>
				<div class="digital-emerging" style="display: none;">
					<p style="padding: 0 0 16px;">As customers move through their journey of interactions with your business, your assessment indicates there may be gaps in their ability to engage in the most convenient manner.  This may cause friction during attempts to accomplish tasks, leading to frustration and reduced satisfaction.</p>
					<p style="padding: 0;">You should perform a full review of common journeys and tasks for each customer persona, followed by an assessment of the digital interaction options at each phase.</p>
				</div>
				<div class="digital-leading" style="display: none;">
					<p style="padding: 0 0 16px;">The assessment indicates you have clearly invested in digital engagement capabilities and customers are offered a fairly broad set of engagement options</p>
					<p style="padding: 0;">To ensure your investments are resulting in the best possible experience, you should reexamine customer journeys and tasks for each persona, checking for gaps or "weak points" in their digital interaction capabilities. It's important to remember that it takes only one poor experience to severely degrade an overall satisfaction rating.</p>
				</div>
			</div>

			<div style="margin-top: 16px; position: relative;">
				<span class="arrow-left" style="top: 53%;"></span>

				<p style="padding-right: 90px;">In order to assess the capabilities offered by your digital experiences, you must understand the customers' journey as they navigate through a series of interactions with your company. Consider the following generic customer journey: </p>

				<img src="<?php echo get_stylesheet_directory_uri(); ?>/public/images/cxmaturity/customer journey.png" style="margin: 0 0 20px 20px; width: 625px;" />

				<p style="padding-right: 90px;">Assessment questions related to <span style="color: #7ED321; font-size: 20px;">Capabilities</span> are design to ensure the proper content and features are being offered consistently across all digital channels to cover all stages of the customer journey. </p>
			</div>

			<div class="content-from-left" style="margin-top: 8px; padding: 20px 20px 10px;">
				<h2 style="padding-bottom: 8px;">Your Digital Capabilities Maturity Level: <span class="maturity-level--capabilities">Emerging</span></h2>
				<p style="padding: 0 0 16px;">During the awareness and consideration stages, marketing plays a key role. It's important to differentiate your products or services and ensure that messaging is both available and consistent across all digital channels.</p>
				<p style="padding: 0 0 16px;">The Transaction and Service/Support stages typically have the most influence on customer experience.  The ability to allow transactions to be completed digitally is essential. More importantly, the experience must be simple, intuitive and pleasant.</p>

				<p class="capabilities-mobile" style="display: none; padding: 0 0 16px;">
					Your assessment response indicates you don't currently offer a native smartphone app for customers to complete transactions. This is a gap that should be carefully reviewed. A rapidly expanding segment of consumers strongly prefer to transact on their phones. Statistics also show that the mobile channel is a key influencer of web and physical store transactions.
				</p>

				<div class="capabilities-chat" style="display: none;">
					<p style="padding: 0 0 16px;">Your assessment indicates that chat is a digital channel that should be further developed for customer interactions. Text based chat as a digital interaction medium is exploding in popularity. Like many technology trends that begin in the consumer space, digital chat is entering a period of rapid adoption in the enterprise. Consider the following statistics:</p>

					<ul style="margin-top: 0;">
						<li>More than 50% of customers would prefer to use online chat before calling a company for support. (Sources: Harris Research and Facebook)</li>
						<li>62% of customers expect live chat to be available on mobile devices, and if available, 82% would use it. (Source: Moxie Software)</li>
						<li>By 2019, 40% of enterprises will be actively using chatbots to facilitate business processes using natural-language interactions. (Source: Gartner)</li>
					</ul>
				</div>

				<p style="padding: 0 0 16px;">Proactive and prescriptive content delivery is also an important contributor to customer experience. This includes sending helpful email and push notifications to devices based on contextual information and customer analytics.</p>
				<p style="padding: 0 0 16px;">A simple example of elevating a digital experience is offering dynamic FAQs that intelligently adjust based on customer intelligence blended with current call center and social media activity.</p>
				<p style="padding: 0 0 16px;">Adding personalization and intelligence to digital interfaces requires a thorough understanding of your customer personas and journeys. Although it is was not covered in this preview assessment, processes and technology related to customer data capture and analytics are a key dependency.</p>
			</div>

			<div style="margin-top: 16px; position: relative;">
				<span class="arrow-right"></span>

				<p style="padding-left: 132px">You should never underestimate the impact that <span style="color: #9013FE; font-size: 20px;">Digital Design</span> can have on customer experience. Human beings are both rational and emotional. The rational side wants to make informed decisions and get things done quickly. The emotional side wants to feel a positive connection. This duality makes design-thinking a critical element to business success.</p>
			</div>

			<div class="content-from-right" style="margin-bottom: 0; margin-top: 16px; padding:20px;">
				<h2 style="padding-bottom: 8px;">Your Digital Design Maturity Level: <span class="maturity-level--design">Emerging</span></h2>

				<div class="design-appeal" style="display: none;">
					<p style="padding: 0 0 16px;">Your assessment indicates opportunities for improvement on the "look and feel" aspects of some digital interfaces. Having a modern and aesthetically pleasing design across all digital interfaces helps to make emotional connections with your customers. Consider the following:</p>

					<ul style="margin-top: 0;">
						<li><strong>Judgments on website credibility are 75% based on a website's overall aesthetics.</strong> ( source: http://www.bcs.org/upload/pdf/ewic_hci09_paper66.pdf )</li>
						<li><strong>First impressions are 94% design-related</strong> (source: https://www.researchgate.net/publication/221516871_Trust_and_mistrust_of_online_health_sites)</li>
						<li><strong>Choosing a specific blue over some other hues amounted to an additional $80 million in annual revenue for Bing.</strong>  (source: https://www.cnet.com/au/news/behind-bings-blue-links)</li>
					</ul>
				</div>

				<p class="design-task-orientation" style="display: none; padding: 0 0 16px;">While having a modern look and feel addresses the emotional side of human interaction, having a task oriented design is even more critical. Customers log in to digital business applications looking to accomplish very specific objectives. The application layout and flow should be designed around these objectives, with the most common tasks front and center.</p>

				<p style="padding: 0 0 16px;"><span class="design-task-orientation" style="display: none;">You maturity assessment suggests a more task oriented design is needed within your company's digital interfaces. </span>Many application designers fall into the trap of trying to create a perfectly hierarchical navigation structure with tasks carefully grouped into nested categories. While this may be sound information architecture, it overlooks the critical fact that not all application features have equal importance to the consumer. Customer actions don't follow a database structure. Features should revolve around key customer journeys. Knowing and surfacing the most common journeys and tasks within an application is crucial to customer satisfaction.</p>

				<p style="padding: 0 0 16px;">Highlighting the most relevant actions within an application becomes even more powerful when user personas, context and preferences are considered. This is where personalization comes in.</p>

				<p style="padding: 0;"><span class="design-personalized" style="display: none;">Your assessment indicates that your company's digital experiences may be lacking in personalization. This requires more intelligent applications, which means raising your level of maturity in both analytics and dynamic interface building. </span>Intelligent applications have the capability to adjust their points of focus based on context and preferences. Driven by advanced analytics, intelligent applications rely on "signals" to drive their behavior. Internal signals come from the applications themselves by logging and analyzing how specific personas are using the applications. External signals add context. They may include time of day, location, weather, call center activity, social media activity, and other factors.</p>
			</div>

			<div style="margin: 16px 0;">
				<p style="margin-bottom: 8px;">A final point of emphasis related to Digital Experiences is application performance. The expectations for application responsiveness continue to increase. Customers in a physical store will tolerate waiting a few minutes for service. Digital application users are far less patient. Consider the following statistics:</p>
				<ul style="margin: 0;">
					<li><strong>Slow-loading websites cost retailers £1.73 billion ($2.6 billion) in lost sales each year.</strong> (source: https://econsultancy.com/blog/9790-slow-loading-websites-cost-retailers-1-73bn-in-lost-sales-each-year)</li>
					<li>Researchers at Microsoft found that a website begins losing traffic to competitors when it takes 250 milliseconds longer to load.</li>
				</ul>
				<p>From a maturity assessment standpoint, much of the emphasis for delivering high-performance applications falls into the "Technology" quadrant. This is because infrastructure, application architecture, caching techniques and other factors come into play.</p>
			</div>

			<div style="background: #00466C; color: #fff; padding: 30px 0 20px;">
				<p style="margin: 0; padding-top: 0;">When customers have a subpar digital experience, they fault the company. To consumers, there's no satisfactory excuse for a poor digital experience.</p>
				<p style="margin: 0; padding-top: 0;">Delivering great experiences requires mastering the four competencies: Experiences, Insights, Technology and Process.</p>
				<p style="margin: 0; padding-top: 0;">By completing Anexinet's online preview of our detailed CX Maturity Model, you have obtained important insight into one of these competencies - the Experiences quadrant. We hope you'll continue your journey to becoming a leader in Customer Experience by unlocking the other three assessment quadrants and completing a more detailed assessment that is customized for your industry and business.</p>
			</div>

			<div style="background: #2A2B2B; color: #FFFFDB; padding: 40px 20px; text-align: center;">
				For more information please contact us at:<br />
				info@anexinet.com<br />
				or<br />
				610.239.8100
			</div>
		</section>
	<?php get_footer(); 
