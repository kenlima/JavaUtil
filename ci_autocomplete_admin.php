<?php
/**
 * @property CI_DB_active_record $db              This is the platform-independent base Active Record implementation class.
 * @property CI_DB_forge $dbforge                 Database Utility Class
 * @property CI_Benchmark $benchmark              This class enables you to mark points and calculate the time difference between them.<br />  Memory consumption can also be displayed.
 * @property CI_Calendar $calendar                This class enables the creation of calendars
 * @property CI_Cart $cart                        Shopping Cart Class
 * @property CI_Config $config                    This class contains functions that enable config files to be managed
 * @property CI_Controller $controller            This class object is the super class that every library in.<br />CodeIgniter will be assigned to.
 * @property CI_Email $email                      Permits email to be sent using Mail, Sendmail, or SMTP.
 * @property CI_Encrypt $encrypt                  Provides two-way keyed encoding using XOR Hashing and Mcrypt
 * @property CI_Exceptions $exceptions            Exceptions Class
 * @property CI_Form_validation $form_validation  Form Validation Class
 * @property CI_Ftp $ftp                          FTP Class
 * @property CI_Hooks $hooks                      //dead
 * @property CI_Image_lib $image_lib              Image Manipulation class
 * @property CI_Input $input                      Pre-processes global input data for security
 * @property CI_Lang $lang                        Language Class
 * @property CI_Loader $load                      Loads views and files
 * @property CI_Log $log                          Logging Class
 * @property CI_Model $model                      CodeIgniter Model Class
 * @property CI_Output $output                    Responsible for sending final output to browser
 * @property CI_Pagination $pagination            Pagination Class
 * @property CI_Parser $parser                    Parses pseudo-variables contained in the specified template view,<br />replacing them with the data in the second param
 * @property CI_Profiler $profiler                This class enables you to display benchmark, query, and other data<br />in order to help with debugging and optimization.
 * @property CI_Router $router                    Parses URIs and determines routing
 * @property CI_Session $session                  Session Class
 * @property CI_Sha1 $sha1                        Provides 160 bit hashing using The Secure Hash Algorithm
 * @property CI_Table $table                      HTML table generation<br />Lets you create tables manually or from database result objects, or arrays.
 * @property CI_Trackback $trackback              Trackback Sending/Receiving Class
 * @property CI_Typography $typography            Typography Class
 * @property CI_Unit_test $unit_test              Simple testing class
 * @property CI_Upload $upload                    File Uploading Class
 * @property CI_URI $uri                          Parses URIs and determines routing
 * @property CI_User_agent $user_agent            Identifies the platform, browser, robot, or mobile devise of the browsing agent
 * @property CI_Validation $validation            //dead
 * @property CI_Xmlrpc $xmlrpc                    XML-RPC request handler class
 * @property CI_Xmlrpcs $xmlrpcs                  XML-RPC server class
 * @property CI_Zip $zip                          Zip Compression Class
 * @property CI_Javascript $javascript            Javascript Class
 * @property CI_Jquery $jquery                    Jquery Class
 * @property CI_Utf8 $utf8                        Provides support for UTF-8 environments
 * @property CI_Security $security                Security Class, xss, csrf, etc...
 * @property CI_Driver_Library $driver            CodeIgniter Driver Library Class
 * @property CI_Cache $cache                      CodeIgniter Caching Class
 *
 * @property MPanda_market $MPanda_market
 * @property Auto_send_email_mng $Auto_send_email_mng
 * @property Msettlement $Msettlement
 * @property Mtoknize $Mtoknize
 * @property MOrder_ship $MOrder_ship
 * @property MStatistics_mng2 $MStatistics_mng2
 * @property Mc_promotion_deal_group_info $Mc_promotion_deal_group_info
 * @property MBoardQnA $MBoardQnA
 * @property Mc_order_info $Mc_order_info
 * @property Mnotice_mng $Mnotice_mng
 * @property Mredirect_url_mng $Mredirect_url_mng
 * @property Mbanner_mng $Mbanner_mng
 * @property Mc_popupstore_info $Mc_popupstore_info
 * @property Mbbs_trade $Mbbs_trade
 * @property MAccount_mng $MAccount_mng
 * @property M_get_invoice_no $M_get_invoice_no
 * @property Mevent_session1 $Mevent_session1
 * @property M_parcel_due_date $M_parcel_due_date
 * @property Mmobile_category_mng $Mmobile_category_mng
 * @property mdeal_list_cache $mdeal_list_cache
 * @property MInvite_friend_event $MInvite_friend_event
 * @property Msbiz_member $Msbiz_member
 * @property MBanner_event_mng $MBanner_event_mng
 * @property Mbbs_proposal $Mbbs_proposal
 * @property Mcard_free_intereset $Mcard_free_intereset
 * @property Mcjoclock $Mcjoclock
 * @property Mpromotion $Mpromotion
 * @property Mbbs_faq $Mbbs_faq
 * @property MCoupon_mng $MCoupon_mng
 * @property MStatistics_mng $MStatistics_mng
 * @property PG_division_mng $PG_division_mng
 * @property Mc_bbs_qna_social $Mc_bbs_qna_social
 * @property mdeal_band_banner $mdeal_band_banner
 * @property Mc_order_info_detail $Mc_order_info_detail
 * @property Msync_ship_prd_type $Msync_ship_prd_type
 * @property Mc_promotion_info $Mc_promotion_info
 * @property MYoung_point_ex $MYoung_point_ex
 * @property Mc_bbs_qna $Mc_bbs_qna
 * @property MSuper_event_2nd $MSuper_event_2nd
 * @property Mwmp_deal_search $Mwmp_deal_search
 * @property MOrderinfo_linkprice_mng $MOrderinfo_linkprice_mng
 * @property MDeal_option_mng $MDeal_option_mng
 * @property MAcc $MAcc
 * @property MStudent $MStudent
 * @property M_parcel_delivery_forcibly $M_parcel_delivery_forcibly
 * @property Ma_popupstore $Ma_popupstore
 * @property Mc_coupon_history $Mc_coupon_history
 * @property Mc_promotion_category_info $Mc_promotion_category_info
 * @property MOrder $MOrder
 * @property Mdealer $Mdealer
 * @property MSubKeyword_mng $MSubKeyword_mng
 * @property Mrecruit $Mrecruit
 * @property MPartner $MPartner
 * @property Ma_discount_exception $Ma_discount_exception
 * @property Mevent_banner_mng $Mevent_banner_mng
 * @property MCoupon_sub $MCoupon_sub
 * @property MEvent_info $MEvent_info
 * @property Mmember_statistics $Mmember_statistics
 * @property MBoard_notice $MBoard_notice
 * @property MPartner_member $MPartner_member
 * @property Mvolkswagen $Mvolkswagen
 * @property Msuggest $Msuggest
 * @property Mc_main $Mc_main
 * @property Mdeal_map $Mdeal_map
 * @property Mhot_potato $Mhot_potato
 * @property MCommission $MCommission
 * @property MDeal_ext_field_mng $MDeal_ext_field_mng
 * @property MDealInfo_ext_mng $MDealInfo_ext_mng
 * @property MRoyalty_mng $MRoyalty_mng
 * @property Mauto_mail $Mauto_mail
 * @property MBoard_1query $MBoard_1query
 * @property Mwmp_tv $Mwmp_tv
 * @property Mdonguk $Mdonguk
 * @property Mmobile_app_event $Mmobile_app_event
 * @property MMaterial_mng $MMaterial_mng
 * @property MDealinfo_flag_mng $MDealinfo_flag_mng
 * @property Mapp_push_history $Mapp_push_history
 * @property Ma_usergroup_best $Ma_usergroup_best
 * @property Mdeal_click_log $Mdeal_click_log
 * @property MSubs_email $MSubs_email
 * @property Mmobile_display_mng $Mmobile_display_mng
 * @property MOrder_affiliate $MOrder_affiliate
 * @property Mevent_mng $Mevent_mng
 * @property MPush_mng $MPush_mng
 * @property MRoad_addr $MRoad_addr
 * @property Ma_recommend_keyword $Ma_recommend_keyword
 * @property Mdata_confirm $Mdata_confirm
 * @property MLbs $MLbs
 * @property MDeal_focus_mng $MDeal_focus_mng
 * @property Mtest $Mtest
 * @property Mmember_info $Mmember_info
 * @property Mc_ship_coupon_settlement $Mc_ship_coupon_settlement
 * @property Mpoint_info $Mpoint_info
 * @property MHot_seven_mng $MHot_seven_mng
 * @property Mc_macc $Mc_macc
 * @property Mpluszone_mng $Mpluszone_mng
 * @property Mc_coupon_info $Mc_coupon_info
 * @property MEmail_collect $MEmail_collect
 * @property Mc_account $Mc_account
 * @property KeywordAdmin $KeywordAdmin
 * @property MWmptv_info $MWmptv_info
 * @property Mcard_benefit_mng $Mcard_benefit_mng
 * @property MDeal_sale_time_mng $MDeal_sale_time_mng
 * @property Mcs_board $Mcs_board
 * @property Mbbs_qna $Mbbs_qna
 * @property MDealInstance $MDealInstance
 * @property MDeal_external_reg_info_mng $MDeal_external_reg_info_mng
 * @property Ma_featureflag $Ma_featureflag
 * @property MDeallast $MDeallast
 * @property MMD_record_mng $MMD_record_mng
 * @property Ma_region_hotspot_and_special $Ma_region_hotspot_and_special
 * @property Ma_area_timeset $Ma_area_timeset
 * @property MInsale_Audit_mng $MInsale_Audit_mng
 * @property MBatch_process $MBatch_process
 * @property Mpsn_recmd_search $Mpsn_recmd_search
 * @property Ma_mall_coupon $Ma_mall_coupon
 * @property Mnetpathy $Mnetpathy
 * @property Mdelivery2 $Mdelivery2
 * @property Mc_deal $Mc_deal
 * @property Mc_member_info_ext $Mc_member_info_ext
 * @property Ma_empty $Ma_empty
 * @property Mbanner_1 $Mbanner_1
 * @property Mcs_mng2 $Mcs_mng2
 * @property MWmp_propose_idea $MWmp_propose_idea
 * @property MAccount $MAccount
 * @property Mc_promotion_gnb_info $Mc_promotion_gnb_info
 * @property Mpoint_extinction_sms_model $Mpoint_extinction_sms_model
 * @property MDeliveryPrdInfo $MDeliveryPrdInfo
 * @property Mc_deal_qna $Mc_deal_qna
 * @property MCustomer_center $MCustomer_center
 * @property Mc_facebook $Mc_facebook
 * @property MMember_info_fav $MMember_info_fav
 * @property MStorebox_Event_Info_mng $MStorebox_Event_Info_mng
 * @property MPartnership_mng $MPartnership_mng
 * @property Mmobile_bridge_info $Mmobile_bridge_info
 * @property Ma_mobile_event $Ma_mobile_event
 * @property MSocial $MSocial
 * @property Mchancedeal $Mchancedeal
 * @property MGood_member $MGood_member
 * @property Msale_coupon_mng $Msale_coupon_mng
 * @property Mc_point_info $Mc_point_info
 * @property Mstaff_point $Mstaff_point
 * @property MDealInfo_mng $MDealInfo_mng
 * @property Ma_band_banner $Ma_band_banner
 * @property Mmweb_gnb $Mmweb_gnb
 * @property MOrganization $MOrganization
 * @property Mc_point_charge_log $Mc_point_charge_log
 * @property MMypage $MMypage
 * @property Ma_today_pick $Ma_today_pick
 * @property Mmobile_template_mng $Mmobile_template_mng
 * @property MKeyword_mng $MKeyword_mng
 * @property MOrder_info $MOrder_info
 * @property Ma_promotion_gnb $Ma_promotion_gnb
 * @property M_parcel_delivery $M_parcel_delivery
 * @property Mc_payment_info $Mc_payment_info
 * @property Mevent_apply_deal $Mevent_apply_deal
 * @property Mc_point_history $Mc_point_history
 * @property Mban_word_mng $Mban_word_mng
 * @property Mc_ship_coupon_settlement_v2 $Mc_ship_coupon_settlement_v2
 * @property Ma_pcweb_gnb $Ma_pcweb_gnb
 * @property MDeal_ship_type_mng $MDeal_ship_type_mng
 * @property Msubs_email_mng $Msubs_email_mng
 * @property MSettlement_history_mng $MSettlement_history_mng
 * @property MAffiliate $MAffiliate
 * @property MSafty_number_mng $MSafty_number_mng
 * @property MActivity $MActivity
 * @property MSms_batch_mng $MSms_batch_mng
 * @property MBatch_option_update $MBatch_option_update
 * @property Mc_member_info_fav $Mc_member_info_fav
 * @property Mparcel_info $Mparcel_info
 * @property MBoard_review $MBoard_review
 * @property Mexception_mng $Mexception_mng
 * @property Mc_member_info $Mc_member_info
 * @property MBoardQnA_op $MBoardQnA_op
 * @property MPayment $MPayment
 * @property MProduct_mng $MProduct_mng
 * @property MPromotion_mng $MPromotion_mng
 * @property Mdeal_national $Mdeal_national
 * @property M_tour_culture $M_tour_culture
 * @property Mmweb_mobile_config $Mmweb_mobile_config
 * @property Mc_cart_history $Mc_cart_history
 * @property Mtb_deal_opt_comp_mng $Mtb_deal_opt_comp_mng
 * @property MCommon_code $MCommon_code
 * @property PG_division_lib $PG_division_lib
 * @property Mc_payment_history $Mc_payment_history
 * @property Ma_search_keyword $Ma_search_keyword
 * @property Mscrapping $Mscrapping
 * @property MSubs $MSubs
 * @property Mmweb_sale_coupon $Mmweb_sale_coupon
 * @property MDeal_schedule_mng $MDeal_schedule_mng
 * @property Mmember_bank_account $Mmember_bank_account
 * @property Ma_deal_exception $Ma_deal_exception
 * @property Mbank $Mbank
 * @property MProduct $MProduct
 * @property MSuper_event_3rd $MSuper_event_3rd
 * @property Mmobile_app_flk $Mmobile_app_flk
 * @property Msale_coupon_commission_mng $Msale_coupon_commission_mng
 * @property Ma_main_best $Ma_main_best
 * @property Mcard_discount_mng $Mcard_discount_mng
 * @property Mc_promotion_category_sale_coupon_m $Mc_promotion_category_sale_coupon_m
 * @property MDealTheme_mng $MDealTheme_mng
 * @property Mboard_push_queue $Mboard_push_queue
 * @property Mpoint_flush_history $Mpoint_flush_history
 * @property Ma_region_hotspot_gnb $Ma_region_hotspot_gnb
 * @property Mc_promotion_category_sale_coupon_d $Mc_promotion_category_sale_coupon_d
 * @property MBoard_notice_mng $MBoard_notice_mng
 * @property MPoint_batch_black $MPoint_batch_black
 * @property MY_Model_Srch_Category $MY_Model_Srch_Category
 * @property MNearby_deal $MNearby_deal
 * @property MDeal_contract $MDeal_contract
 * @property MY2_Model $MY2_Model
 * @property Mmweb_lbs $Mmweb_lbs
 * @property mng_pagination $mng_pagination
 * @property Malliance_statistics $Malliance_statistics
 * @property Mc_promotion_history $Mc_promotion_history
 * @property MEvent $MEvent
 * @property App_review_induction $App_review_induction
 * @property MPopupstore $MPopupstore
 * @property MSubs_sms $MSubs_sms
 * @property Mc_promotion_group_m $Mc_promotion_group_m
 * @property Maffiliate_mng $Maffiliate_mng
 * @property MPoint $MPoint
 * @property Mweb_log $Mweb_log
 * @property MGnb_main_mng $MGnb_main_mng
 * @property Mc_promotion_group_d $Mc_promotion_group_d
 * @property MSurvey_answer $MSurvey_answer
 * @property mmobile_main_promotion $mmobile_main_promotion
 * @property MCart $MCart
 * @property Mc_payment_info_ext_field $Mc_payment_info_ext_field
 * @property Mc_sale_coupon $Mc_sale_coupon
 * @property MSticker_mng $MSticker_mng
 * @property mpoint_mng $mpoint_mng
 * @property Mspecial_deals $Mspecial_deals
 * @property Ma_promotion $Ma_promotion
 * @property CategorySearch $CategorySearch
 * @property MDeal_history_md_info_mng $MDeal_history_md_info_mng
 * @property Mqna_search_list $Mqna_search_list
 * @property MBoard_cate $MBoard_cate
 * @property MAffiliate_mng $MAffiliate_mng
 * @property Mcs_mng $Mcs_mng
 * @property MAdpush_mng $MAdpush_mng
 * @property Mbbs_qna_migration $Mbbs_qna_migration
 * @property MDealLocation $MDealLocation
 * @property MBoard_faq $MBoard_faq
 * @property Ma_location_tree $Ma_location_tree
 * @property Msearch_mng $Msearch_mng
 * @property Mautomail_subdata $Mautomail_subdata
 * @property Msend_coupon_mng $Msend_coupon_mng
 * @property Mapp_event_mng $Mapp_event_mng
 * @property MCategory_mng $MCategory_mng
 * @property MCard_event_mng $MCard_event_mng
 * @property Mc_fav_deals $Mc_fav_deals
 * @property MVoucher $MVoucher
 * @property Mhot_keyword $Mhot_keyword
 * @property Mc_zipcode_new $Mc_zipcode_new
 * @property Mevent_random_gift $Mevent_random_gift
 * @property MSbiz $MSbiz
 * @property MDealer_Sms $MDealer_Sms
 * @property Msettlement_v2 $Msettlement_v2
 * @property MSettlement_mng $MSettlement_mng
 * @property MSecurity_log $MSecurity_log
 * @property Msms_advice_mng $Msms_advice_mng
 * @property MDeal_info_detail $MDeal_info_detail
 * @property MUser $MUser
 * @property Mmd_support $Mmd_support
 * @property MOrder_ship_invoice_time $MOrder_ship_invoice_time
 * @property Mbbs_qna_notice $Mbbs_qna_notice
 * @property MDealInfo_mobile_black_mng $MDealInfo_mobile_black_mng
 * @property Mpluszone $Mpluszone
 * @property Mpromotion_v2 $Mpromotion_v2
 * @property MDeal $MDeal
 * @property Mvoucher_mng $Mvoucher_mng
 * @property MDealHistory_mng $MDealHistory_mng
 * @property Mbbs_review $Mbbs_review
 * @property MDeal_Agreement_mng $MDeal_Agreement_mng
 * @property Mevent_app_first_login $Mevent_app_first_login
 * @property Mbbs_event $Mbbs_event
 * @property Mmweb_mypage $Mmweb_mypage
 * @property Mc_order_info_ext $Mc_order_info_ext
 * @property Mreport $Mreport
 * @property MCompany_contract_lib $MCompany_contract_lib
 * @property MFriend $MFriend
 * @property MDeal_draft_mng $MDeal_draft_mng
 * @property MCompanyInfo_mng $MCompanyInfo_mng
 * @property Mmweb_location_tree $Mmweb_location_tree
 * @property MEvent_rss_manage $MEvent_rss_manage
 * @property MPoint_voucher $MPoint_voucher
 * @property Msendmail $Msendmail
 * @property MOther_site_simple $MOther_site_simple
 * @property Mpoint_history $Mpoint_history
 * @property MExchange $MExchange
 * @property MOrder_mng $MOrder_mng
 * @property Ma_sale_coupon_distribute $Ma_sale_coupon_distribute
 * @property Mbanner_mng_1 $Mbanner_mng_1
 * @property Mmobile_todaypick $Mmobile_todaypick
 * @property MSettlement_model_report $MSettlement_model_report
 * @property Popupstore_manager $Popupstore_manager
 * @property MDashboard_mng $MDashboard_mng
 * @property Mdealer_notice $Mdealer_notice
 * @property Mdelivery_product_type $Mdelivery_product_type
 * @property MFile_upload $MFile_upload
 * @property Mmweb_wmpzone $Mmweb_wmpzone
 * @property MDeal_mng $MDeal_mng
 * @property Mnotice_deal_mng $Mnotice_deal_mng
 * @property Mpg_div $Mpg_div
 * @property MDealInfoDesc_mng $MDealInfoDesc_mng
 * @property Mdelivery $Mdelivery
 * @property MOpt $MOpt
 * @property Mindicator_manage_model $Mindicator_manage_model
 * @property M_smart_interactive $M_smart_interactive
 * @property Mvip_grade_benefit $Mvip_grade_benefit
 * @property MPoint_mng $MPoint_mng
 * @property Mmweb_mobile_config_keys $Mmweb_mobile_config_keys
 * @property MBoard_cate_faq $MBoard_cate_faq
 * @property MCoupon $MCoupon
 * @property MDealImg_mng $MDealImg_mng
 * @property Minvite_friend $Minvite_friend
 * @property MProposal_mng $MProposal_mng
 * @property M_interpark $M_interpark
 * @property Mc_order_history $Mc_order_history
 * @property Mlocation_info $Mlocation_info
 * @property MBoard_review_op $MBoard_review_op
 * @property Mc_gnb $Mc_gnb
 * @property Mmobile_app $Mmobile_app
 * @property Mmonitoring $Mmonitoring
 * @property MCode $MCode
 * @property MDeal_instance_mng $MDeal_instance_mng
 * @property Mmweb_gnb_recommend $Mmweb_gnb_recommend
 * @property Moption_magnify_mng $Moption_magnify_mng
 * @property Msubs_mail_mng $Msubs_mail_mng
 * @property Mpsn_recmd $Mpsn_recmd
 * @property Mc_order_ship_recent $Mc_order_ship_recent
 * @property MBlacklist $MBlacklist
 * @property MDealMember_mng $MDealMember_mng
 * @property Mc_order $Mc_order
 * @property Ma_gnb $Ma_gnb
 * @property Mdeal_national_mng $Mdeal_national_mng
 * @property Mbanner $Mbanner
 * @property MDealer $MDealer
 * @property MExchange_mng $MExchange_mng
 * @property MSubs_mng $MSubs_mng
 * @property Ma_deal_exception_sale_coupon $Ma_deal_exception_sale_coupon
 * @property Mc_promotion_deal_info $Mc_promotion_deal_info
 * @property MY_Model $MY_Model
 * @property Mc_cart_info $Mc_cart_info
 * @property MLocation_mng $MLocation_mng
 * @property Mmobile_event_mng $Mmobile_event_mng
 *
 */
class Controller {};



/**
 * @property CI_DB_active_record $db              This is the platform-independent base Active Record implementation class.
 * @property CI_DB_forge $dbforge                 Database Utility Class
 * @property CI_Benchmark $benchmark              This class enables you to mark points and calculate the time difference between them.<br />  Memory consumption can also be displayed.
 * @property CI_Calendar $calendar                This class enables the creation of calendars
 * @property CI_Cart $cart                        Shopping Cart Class
 * @property CI_Config $config                    This class contains functions that enable config files to be managed
 * @property CI_Controller $controller            This class object is the super class that every library in.<br />CodeIgniter will be assigned to.
 * @property CI_Email $email                      Permits email to be sent using Mail, Sendmail, or SMTP.
 * @property CI_Encrypt $encrypt                  Provides two-way keyed encoding using XOR Hashing and Mcrypt
 * @property CI_Exceptions $exceptions            Exceptions Class
 * @property CI_Form_validation $form_validation  Form Validation Class
 * @property CI_Ftp $ftp                          FTP Class
 * @property CI_Hooks $hooks                      //dead
 * @property CI_Image_lib $image_lib              Image Manipulation class
 * @property CI_Input $input                      Pre-processes global input data for security
 * @property CI_Lang $lang                        Language Class
 * @property CI_Loader $load                      Loads views and files
 * @property CI_Log $log                          Logging Class
 * @property CI_Model $model                      CodeIgniter Model Class
 * @property CI_Output $output                    Responsible for sending final output to browser
 * @property CI_Pagination $pagination            Pagination Class
 * @property CI_Parser $parser                    Parses pseudo-variables contained in the specified template view,<br />replacing them with the data in the second param
 * @property CI_Profiler $profiler                This class enables you to display benchmark, query, and other data<br />in order to help with debugging and optimization.
 * @property CI_Router $router                    Parses URIs and determines routing
 * @property CI_Session $session                  Session Class
 * @property CI_Sha1 $sha1                        Provides 160 bit hashing using The Secure Hash Algorithm
 * @property CI_Table $table                      HTML table generation<br />Lets you create tables manually or from database result objects, or arrays.
 * @property CI_Trackback $trackback              Trackback Sending/Receiving Class
 * @property CI_Typography $typography            Typography Class
 * @property CI_Unit_test $unit_test              Simple testing class
 * @property CI_Upload $upload                    File Uploading Class
 * @property CI_URI $uri                          Parses URIs and determines routing
 * @property CI_User_agent $user_agent            Identifies the platform, browser, robot, or mobile devise of the browsing agent
 * @property CI_Validation $validation            //dead
 * @property CI_Xmlrpc $xmlrpc                    XML-RPC request handler class
 * @property CI_Xmlrpcs $xmlrpcs                  XML-RPC server class
 * @property CI_Zip $zip                          Zip Compression Class
 * @property CI_Javascript $javascript            Javascript Class
 * @property CI_Jquery $jquery                    Jquery Class
 * @property CI_Utf8 $utf8                        Provides support for UTF-8 environments
 * @property CI_Security $security                Security Class, xss, csrf, etc...
 * @property CI_Driver_Library $driver            CodeIgniter Driver Library Class
 * @property CI_Cache $cache                      CodeIgniter Caching Class
 *
 * @property MPanda_market $MPanda_market
 * @property Auto_send_email_mng $Auto_send_email_mng
 * @property Msettlement $Msettlement
 * @property Mtoknize $Mtoknize
 * @property MOrder_ship $MOrder_ship
 * @property MStatistics_mng2 $MStatistics_mng2
 * @property Mc_promotion_deal_group_info $Mc_promotion_deal_group_info
 * @property MBoardQnA $MBoardQnA
 * @property Mc_order_info $Mc_order_info
 * @property Mnotice_mng $Mnotice_mng
 * @property Mredirect_url_mng $Mredirect_url_mng
 * @property Mbanner_mng $Mbanner_mng
 * @property Mc_popupstore_info $Mc_popupstore_info
 * @property Mbbs_trade $Mbbs_trade
 * @property MAccount_mng $MAccount_mng
 * @property M_get_invoice_no $M_get_invoice_no
 * @property Mevent_session1 $Mevent_session1
 * @property M_parcel_due_date $M_parcel_due_date
 * @property Mmobile_category_mng $Mmobile_category_mng
 * @property mdeal_list_cache $mdeal_list_cache
 * @property MInvite_friend_event $MInvite_friend_event
 * @property Msbiz_member $Msbiz_member
 * @property MBanner_event_mng $MBanner_event_mng
 * @property Mbbs_proposal $Mbbs_proposal
 * @property Mcard_free_intereset $Mcard_free_intereset
 * @property Mcjoclock $Mcjoclock
 * @property Mpromotion $Mpromotion
 * @property Mbbs_faq $Mbbs_faq
 * @property MCoupon_mng $MCoupon_mng
 * @property MStatistics_mng $MStatistics_mng
 * @property PG_division_mng $PG_division_mng
 * @property Mc_bbs_qna_social $Mc_bbs_qna_social
 * @property mdeal_band_banner $mdeal_band_banner
 * @property Mc_order_info_detail $Mc_order_info_detail
 * @property Msync_ship_prd_type $Msync_ship_prd_type
 * @property Mc_promotion_info $Mc_promotion_info
 * @property MYoung_point_ex $MYoung_point_ex
 * @property Mc_bbs_qna $Mc_bbs_qna
 * @property MSuper_event_2nd $MSuper_event_2nd
 * @property Mwmp_deal_search $Mwmp_deal_search
 * @property MOrderinfo_linkprice_mng $MOrderinfo_linkprice_mng
 * @property MDeal_option_mng $MDeal_option_mng
 * @property MAcc $MAcc
 * @property MStudent $MStudent
 * @property M_parcel_delivery_forcibly $M_parcel_delivery_forcibly
 * @property Ma_popupstore $Ma_popupstore
 * @property Mc_coupon_history $Mc_coupon_history
 * @property Mc_promotion_category_info $Mc_promotion_category_info
 * @property MOrder $MOrder
 * @property Mdealer $Mdealer
 * @property MSubKeyword_mng $MSubKeyword_mng
 * @property Mrecruit $Mrecruit
 * @property MPartner $MPartner
 * @property Ma_discount_exception $Ma_discount_exception
 * @property Mevent_banner_mng $Mevent_banner_mng
 * @property MCoupon_sub $MCoupon_sub
 * @property MEvent_info $MEvent_info
 * @property Mmember_statistics $Mmember_statistics
 * @property MBoard_notice $MBoard_notice
 * @property MPartner_member $MPartner_member
 * @property Mvolkswagen $Mvolkswagen
 * @property Msuggest $Msuggest
 * @property Mc_main $Mc_main
 * @property Mdeal_map $Mdeal_map
 * @property Mhot_potato $Mhot_potato
 * @property MCommission $MCommission
 * @property MDeal_ext_field_mng $MDeal_ext_field_mng
 * @property MDealInfo_ext_mng $MDealInfo_ext_mng
 * @property MRoyalty_mng $MRoyalty_mng
 * @property Mauto_mail $Mauto_mail
 * @property MBoard_1query $MBoard_1query
 * @property Mwmp_tv $Mwmp_tv
 * @property Mdonguk $Mdonguk
 * @property Mmobile_app_event $Mmobile_app_event
 * @property MMaterial_mng $MMaterial_mng
 * @property MDealinfo_flag_mng $MDealinfo_flag_mng
 * @property Mapp_push_history $Mapp_push_history
 * @property Ma_usergroup_best $Ma_usergroup_best
 * @property Mdeal_click_log $Mdeal_click_log
 * @property MSubs_email $MSubs_email
 * @property Mmobile_display_mng $Mmobile_display_mng
 * @property MOrder_affiliate $MOrder_affiliate
 * @property Mevent_mng $Mevent_mng
 * @property MPush_mng $MPush_mng
 * @property MRoad_addr $MRoad_addr
 * @property Ma_recommend_keyword $Ma_recommend_keyword
 * @property Mdata_confirm $Mdata_confirm
 * @property MLbs $MLbs
 * @property MDeal_focus_mng $MDeal_focus_mng
 * @property Mtest $Mtest
 * @property Mmember_info $Mmember_info
 * @property Mc_ship_coupon_settlement $Mc_ship_coupon_settlement
 * @property Mpoint_info $Mpoint_info
 * @property MHot_seven_mng $MHot_seven_mng
 * @property Mc_macc $Mc_macc
 * @property Mpluszone_mng $Mpluszone_mng
 * @property Mc_coupon_info $Mc_coupon_info
 * @property MEmail_collect $MEmail_collect
 * @property Mc_account $Mc_account
 * @property KeywordAdmin $KeywordAdmin
 * @property MWmptv_info $MWmptv_info
 * @property Mcard_benefit_mng $Mcard_benefit_mng
 * @property MDeal_sale_time_mng $MDeal_sale_time_mng
 * @property Mcs_board $Mcs_board
 * @property Mbbs_qna $Mbbs_qna
 * @property MDealInstance $MDealInstance
 * @property MDeal_external_reg_info_mng $MDeal_external_reg_info_mng
 * @property Ma_featureflag $Ma_featureflag
 * @property MDeallast $MDeallast
 * @property MMD_record_mng $MMD_record_mng
 * @property Ma_region_hotspot_and_special $Ma_region_hotspot_and_special
 * @property Ma_area_timeset $Ma_area_timeset
 * @property MInsale_Audit_mng $MInsale_Audit_mng
 * @property MBatch_process $MBatch_process
 * @property Mpsn_recmd_search $Mpsn_recmd_search
 * @property Ma_mall_coupon $Ma_mall_coupon
 * @property Mnetpathy $Mnetpathy
 * @property Mdelivery2 $Mdelivery2
 * @property Mc_deal $Mc_deal
 * @property Mc_member_info_ext $Mc_member_info_ext
 * @property Ma_empty $Ma_empty
 * @property Mbanner_1 $Mbanner_1
 * @property Mcs_mng2 $Mcs_mng2
 * @property MWmp_propose_idea $MWmp_propose_idea
 * @property MAccount $MAccount
 * @property Mc_promotion_gnb_info $Mc_promotion_gnb_info
 * @property Mpoint_extinction_sms_model $Mpoint_extinction_sms_model
 * @property MDeliveryPrdInfo $MDeliveryPrdInfo
 * @property Mc_deal_qna $Mc_deal_qna
 * @property MCustomer_center $MCustomer_center
 * @property Mc_facebook $Mc_facebook
 * @property MMember_info_fav $MMember_info_fav
 * @property MStorebox_Event_Info_mng $MStorebox_Event_Info_mng
 * @property MPartnership_mng $MPartnership_mng
 * @property Mmobile_bridge_info $Mmobile_bridge_info
 * @property Ma_mobile_event $Ma_mobile_event
 * @property MSocial $MSocial
 * @property Mchancedeal $Mchancedeal
 * @property MGood_member $MGood_member
 * @property Msale_coupon_mng $Msale_coupon_mng
 * @property Mc_point_info $Mc_point_info
 * @property Mstaff_point $Mstaff_point
 * @property MDealInfo_mng $MDealInfo_mng
 * @property Ma_band_banner $Ma_band_banner
 * @property Mmweb_gnb $Mmweb_gnb
 * @property MOrganization $MOrganization
 * @property Mc_point_charge_log $Mc_point_charge_log
 * @property MMypage $MMypage
 * @property Ma_today_pick $Ma_today_pick
 * @property Mmobile_template_mng $Mmobile_template_mng
 * @property MKeyword_mng $MKeyword_mng
 * @property MOrder_info $MOrder_info
 * @property Ma_promotion_gnb $Ma_promotion_gnb
 * @property M_parcel_delivery $M_parcel_delivery
 * @property Mc_payment_info $Mc_payment_info
 * @property Mevent_apply_deal $Mevent_apply_deal
 * @property Mc_point_history $Mc_point_history
 * @property Mban_word_mng $Mban_word_mng
 * @property Mc_ship_coupon_settlement_v2 $Mc_ship_coupon_settlement_v2
 * @property Ma_pcweb_gnb $Ma_pcweb_gnb
 * @property MDeal_ship_type_mng $MDeal_ship_type_mng
 * @property Msubs_email_mng $Msubs_email_mng
 * @property MSettlement_history_mng $MSettlement_history_mng
 * @property MAffiliate $MAffiliate
 * @property MSafty_number_mng $MSafty_number_mng
 * @property MActivity $MActivity
 * @property MSms_batch_mng $MSms_batch_mng
 * @property MBatch_option_update $MBatch_option_update
 * @property Mc_member_info_fav $Mc_member_info_fav
 * @property Mparcel_info $Mparcel_info
 * @property MBoard_review $MBoard_review
 * @property Mexception_mng $Mexception_mng
 * @property Mc_member_info $Mc_member_info
 * @property MBoardQnA_op $MBoardQnA_op
 * @property MPayment $MPayment
 * @property MProduct_mng $MProduct_mng
 * @property MPromotion_mng $MPromotion_mng
 * @property Mdeal_national $Mdeal_national
 * @property M_tour_culture $M_tour_culture
 * @property Mmweb_mobile_config $Mmweb_mobile_config
 * @property Mc_cart_history $Mc_cart_history
 * @property Mtb_deal_opt_comp_mng $Mtb_deal_opt_comp_mng
 * @property MCommon_code $MCommon_code
 * @property PG_division_lib $PG_division_lib
 * @property Mc_payment_history $Mc_payment_history
 * @property Ma_search_keyword $Ma_search_keyword
 * @property Mscrapping $Mscrapping
 * @property MSubs $MSubs
 * @property Mmweb_sale_coupon $Mmweb_sale_coupon
 * @property MDeal_schedule_mng $MDeal_schedule_mng
 * @property Mmember_bank_account $Mmember_bank_account
 * @property Ma_deal_exception $Ma_deal_exception
 * @property Mbank $Mbank
 * @property MProduct $MProduct
 * @property MSuper_event_3rd $MSuper_event_3rd
 * @property Mmobile_app_flk $Mmobile_app_flk
 * @property Msale_coupon_commission_mng $Msale_coupon_commission_mng
 * @property Ma_main_best $Ma_main_best
 * @property Mcard_discount_mng $Mcard_discount_mng
 * @property Mc_promotion_category_sale_coupon_m $Mc_promotion_category_sale_coupon_m
 * @property MDealTheme_mng $MDealTheme_mng
 * @property Mboard_push_queue $Mboard_push_queue
 * @property Mpoint_flush_history $Mpoint_flush_history
 * @property Ma_region_hotspot_gnb $Ma_region_hotspot_gnb
 * @property Mc_promotion_category_sale_coupon_d $Mc_promotion_category_sale_coupon_d
 * @property MBoard_notice_mng $MBoard_notice_mng
 * @property MPoint_batch_black $MPoint_batch_black
 * @property MY_Model_Srch_Category $MY_Model_Srch_Category
 * @property MNearby_deal $MNearby_deal
 * @property MDeal_contract $MDeal_contract
 * @property MY2_Model $MY2_Model
 * @property Mmweb_lbs $Mmweb_lbs
 * @property mng_pagination $mng_pagination
 * @property Malliance_statistics $Malliance_statistics
 * @property Mc_promotion_history $Mc_promotion_history
 * @property MEvent $MEvent
 * @property App_review_induction $App_review_induction
 * @property MPopupstore $MPopupstore
 * @property MSubs_sms $MSubs_sms
 * @property Mc_promotion_group_m $Mc_promotion_group_m
 * @property Maffiliate_mng $Maffiliate_mng
 * @property MPoint $MPoint
 * @property Mweb_log $Mweb_log
 * @property MGnb_main_mng $MGnb_main_mng
 * @property Mc_promotion_group_d $Mc_promotion_group_d
 * @property MSurvey_answer $MSurvey_answer
 * @property mmobile_main_promotion $mmobile_main_promotion
 * @property MCart $MCart
 * @property Mc_payment_info_ext_field $Mc_payment_info_ext_field
 * @property Mc_sale_coupon $Mc_sale_coupon
 * @property MSticker_mng $MSticker_mng
 * @property mpoint_mng $mpoint_mng
 * @property Mspecial_deals $Mspecial_deals
 * @property Ma_promotion $Ma_promotion
 * @property CategorySearch $CategorySearch
 * @property MDeal_history_md_info_mng $MDeal_history_md_info_mng
 * @property Mqna_search_list $Mqna_search_list
 * @property MBoard_cate $MBoard_cate
 * @property MAffiliate_mng $MAffiliate_mng
 * @property Mcs_mng $Mcs_mng
 * @property MAdpush_mng $MAdpush_mng
 * @property Mbbs_qna_migration $Mbbs_qna_migration
 * @property MDealLocation $MDealLocation
 * @property MBoard_faq $MBoard_faq
 * @property Ma_location_tree $Ma_location_tree
 * @property Msearch_mng $Msearch_mng
 * @property Mautomail_subdata $Mautomail_subdata
 * @property Msend_coupon_mng $Msend_coupon_mng
 * @property Mapp_event_mng $Mapp_event_mng
 * @property MCategory_mng $MCategory_mng
 * @property MCard_event_mng $MCard_event_mng
 * @property Mc_fav_deals $Mc_fav_deals
 * @property MVoucher $MVoucher
 * @property Mhot_keyword $Mhot_keyword
 * @property Mc_zipcode_new $Mc_zipcode_new
 * @property Mevent_random_gift $Mevent_random_gift
 * @property MSbiz $MSbiz
 * @property MDealer_Sms $MDealer_Sms
 * @property Msettlement_v2 $Msettlement_v2
 * @property MSettlement_mng $MSettlement_mng
 * @property MSecurity_log $MSecurity_log
 * @property Msms_advice_mng $Msms_advice_mng
 * @property MDeal_info_detail $MDeal_info_detail
 * @property MUser $MUser
 * @property Mmd_support $Mmd_support
 * @property MOrder_ship_invoice_time $MOrder_ship_invoice_time
 * @property Mbbs_qna_notice $Mbbs_qna_notice
 * @property MDealInfo_mobile_black_mng $MDealInfo_mobile_black_mng
 * @property Mpluszone $Mpluszone
 * @property Mpromotion_v2 $Mpromotion_v2
 * @property MDeal $MDeal
 * @property Mvoucher_mng $Mvoucher_mng
 * @property MDealHistory_mng $MDealHistory_mng
 * @property Mbbs_review $Mbbs_review
 * @property MDeal_Agreement_mng $MDeal_Agreement_mng
 * @property Mevent_app_first_login $Mevent_app_first_login
 * @property Mbbs_event $Mbbs_event
 * @property Mmweb_mypage $Mmweb_mypage
 * @property Mc_order_info_ext $Mc_order_info_ext
 * @property Mreport $Mreport
 * @property MCompany_contract_lib $MCompany_contract_lib
 * @property MFriend $MFriend
 * @property MDeal_draft_mng $MDeal_draft_mng
 * @property MCompanyInfo_mng $MCompanyInfo_mng
 * @property Mmweb_location_tree $Mmweb_location_tree
 * @property MEvent_rss_manage $MEvent_rss_manage
 * @property MPoint_voucher $MPoint_voucher
 * @property Msendmail $Msendmail
 * @property MOther_site_simple $MOther_site_simple
 * @property Mpoint_history $Mpoint_history
 * @property MExchange $MExchange
 * @property MOrder_mng $MOrder_mng
 * @property Ma_sale_coupon_distribute $Ma_sale_coupon_distribute
 * @property Mbanner_mng_1 $Mbanner_mng_1
 * @property Mmobile_todaypick $Mmobile_todaypick
 * @property MSettlement_model_report $MSettlement_model_report
 * @property Popupstore_manager $Popupstore_manager
 * @property MDashboard_mng $MDashboard_mng
 * @property Mdealer_notice $Mdealer_notice
 * @property Mdelivery_product_type $Mdelivery_product_type
 * @property MFile_upload $MFile_upload
 * @property Mmweb_wmpzone $Mmweb_wmpzone
 * @property MDeal_mng $MDeal_mng
 * @property Mnotice_deal_mng $Mnotice_deal_mng
 * @property Mpg_div $Mpg_div
 * @property MDealInfoDesc_mng $MDealInfoDesc_mng
 * @property Mdelivery $Mdelivery
 * @property MOpt $MOpt
 * @property Mindicator_manage_model $Mindicator_manage_model
 * @property M_smart_interactive $M_smart_interactive
 * @property Mvip_grade_benefit $Mvip_grade_benefit
 * @property MPoint_mng $MPoint_mng
 * @property Mmweb_mobile_config_keys $Mmweb_mobile_config_keys
 * @property MBoard_cate_faq $MBoard_cate_faq
 * @property MCoupon $MCoupon
 * @property MDealImg_mng $MDealImg_mng
 * @property Minvite_friend $Minvite_friend
 * @property MProposal_mng $MProposal_mng
 * @property M_interpark $M_interpark
 * @property Mc_order_history $Mc_order_history
 * @property Mlocation_info $Mlocation_info
 * @property MBoard_review_op $MBoard_review_op
 * @property Mc_gnb $Mc_gnb
 * @property Mmobile_app $Mmobile_app
 * @property Mmonitoring $Mmonitoring
 * @property MCode $MCode
 * @property MDeal_instance_mng $MDeal_instance_mng
 * @property Mmweb_gnb_recommend $Mmweb_gnb_recommend
 * @property Moption_magnify_mng $Moption_magnify_mng
 * @property Msubs_mail_mng $Msubs_mail_mng
 * @property Mpsn_recmd $Mpsn_recmd
 * @property Mc_order_ship_recent $Mc_order_ship_recent
 * @property MBlacklist $MBlacklist
 * @property MDealMember_mng $MDealMember_mng
 * @property Mc_order $Mc_order
 * @property Ma_gnb $Ma_gnb
 * @property Mdeal_national_mng $Mdeal_national_mng
 * @property Mbanner $Mbanner
 * @property MDealer $MDealer
 * @property MExchange_mng $MExchange_mng
 * @property MSubs_mng $MSubs_mng
 * @property Ma_deal_exception_sale_coupon $Ma_deal_exception_sale_coupon
 * @property Mc_promotion_deal_info $Mc_promotion_deal_info
 * @property MY_Model $MY_Model
 * @property Mc_cart_info $Mc_cart_info
 * @property MLocation_mng $MLocation_mng
 * @property Mmobile_event_mng $Mmobile_event_mng
 *
 */

class Model {};