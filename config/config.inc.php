<?php
define("DB_HOST", "localhost");
define("DB_USER", "cashtwo5_balace");
define("DB_PASS", "Cameroonian1");
define("DB_NAME", "cashtwo5_slms");
define("DB_USER_TBL", "tbl_users");

define("CONTENT_COURSE_MATERIAL", "content/course_material/");
define("CONTENT_REGISTRATION_DOCS_ID", "content/registration_docs/ids/");
define("CONTENT_REGISTRATION_DOCS_CV", "content/registration_docs/cvs/");
define("CONTENT_SIGNATURES", "content/signatures/");
define("CONTENT_ADMIN_DOCS", "content/uploads/admin/docs/");
define("CONTENT_ENROLLMENT_FORM", "content/enrollment/forms/");
define("CONTENT_ATTENDANCE", "content/attendance/");
define("CONTENT_PARTICIPATION", "content/participation/");
define("CONTENT_ENROLLMENT_TEMPLATES", "content/templates/enrollment/");
define("CONTENT_ENROLLMENT_LETTER", "content/enrollment/letters/");
define("CONTENT_SOR", "content/sor/");                  // Statement of Results
define("CONTENT_MIS", "content/mis_uploads/");          // Stores successful uploads docs
define("CONTENT_FEEDBACK", "content/feedback/");          // Stores successful uploads docs
define("CONTENT_EXAM", "content/exam/");          // Stores successful uploads docs
define("CONTENT_ASSESSMENT", "content/assessment/");          // Stores Assessment formatives, summatives and assessment reports
define("CONTENT_MODERATION", "content/moderation/");          // Stores Moderated formatives, summatives and moderation reports
define("CONTENT_EXT_MODERATION", "content/external_moderation/");          // Stores external moderation reports
define("CONTENT_FACILITATION", "content/facilitation/");          // Facilitation reports
define("CONTENT_CERTIFICATES", "content/certificates/");
define("CONTENT_DOWNLOADABLES", "content/downloadables/");
define("CONTENT_ACCREDITATION", "content/accreditation/");
define("CONTENT_QMS", "content/qms/");
define("CONTENT_APPEALS", "content/appeals/");

define("CONTENT_ATTENDANCE_TEMPLATE", "content/templates/attendance/");
define("CONTENT_FEEDBACK_TEMPLATE", "content/templates/feedback/");
define("CONTENT_EXAM_TEMPLATE", "content/templates/exam/");
define("CONTENT_QMS_TEMPLATE", "content/templates/qms/");
define("CONTENT_REPORTS_TEMPLATE", "content/templates/reports/");
define("CONTENT_CERTIFICATES_TEMPLATE", "content/templates/certificates/");

define("LMS_STATUS_REGISTERED", "0");
define("LMS_STATUS_ENROLLED", "1");
define("LMS_STATUS_ASSESSED", "2");
define("LMS_STATUS_MODERATED", "3");
define("LMS_STATUS_EXT_MODERATED", "4");        // Externally moderated
define("LMS_STATUS_PRE_ACHIEVED", "5");
define("LMS_STATUS_ACHIEVED", "6");

define("LMS_STATUS_MODULE_UNCONFIRMED", "0");
define("LMS_STATUS_MODULE_CONFIRMED", "1");
define("LMS_STATUS_MODULE_APPEALED", "2");
define("LMS_STATUS_MODULE_APPEAL_UPDATE_ASSESSOR", "3");
define("LMS_STATUS_MODULE_APPEAL_UPDATE_MODERATOR", "4");
define("LMS_STATUS_MODULE_APPEAL_RESOLVED", "5");


define("LMS_LOGIN_SECRET", "85236874135685312,0");

define("MODERATOR_MODERATION_PERCENTATION", 30);        // Percentage of assessed learners to be moderated = 30%

// ToDo: Update accordingly for other programmes and domains
define("LMS_EMAIL_HOST", "mail.salgaelearning.com");        
define("LMS_FROM_EMAIL", "noreply@salgaelearning.com");
define("LMS_NO_REPLY_EMAIL", "noreply@salgaelearning.com");
define("LMS_PWD_EMAIL", "!HD3A04{.9]@)%49djmkl386531@de44883");
// define("LMS_PWD_EMAIL", "!HD3A04{.9]@)%49djmkl386531@de44883"); // for bal@c2m.biz


define("LMS_FROM_NAME", " MSEP Programme Administrator ");
define("LMS_SLMS_MAIN_HOMEPAGE", "https://www.salgaelearning.com");
define("LMS_PROGRAMME_PARENT_FOLDER", "/msep/");                            // used to redirect user after login to the right user role account
define("LMS_PROGRAMME_ABS_PATH", "https://msep.salgaelearning.com/");      // used for invitation, password reset and program specific login(sent after registration) links 
