<?php
/* Automatically generated at 2013/03/22 16:49 */
define('CMD_NONE',	0);
define('CMD_DEFAULT',	CMD_NONE);
define('CMD_PROTOCOL',	20110707);
define('CMD_USE',	1);
define('CMD_HELLO',	1);
define('CMD_DEBUG',	2);
define('CMD_TIMEOUT',	3);
define('CMD_QUIT',	4);
define('CMD_INDEX_SET_DB',	32);
define('CMD_INDEX_GET_DB',	33);
define('CMD_INDEX_SUBMIT',	34);
define('CMD_INDEX_REMOVE',	35);
define('CMD_INDEX_EXDATA',	36);
define('CMD_INDEX_CLEAN_DB',	37);
define('CMD_DELETE_PROJECT',	38);
define('CMD_INDEX_COMMIT',	39);
define('CMD_INDEX_REBUILD',	40);
define('CMD_FLUSH_LOGGING',	41);
define('CMD_INDEX_SYNONYMS',	42);
define('CMD_INDEX_USER_DICT',	43);
define('CMD_SEARCH_DB_TOTAL',	64);
define('CMD_SEARCH_GET_TOTAL',	65);
define('CMD_SEARCH_GET_RESULT',	66);
define('CMD_SEARCH_SET_DB',	CMD_INDEX_SET_DB);
define('CMD_SEARCH_GET_DB',	CMD_INDEX_GET_DB);
define('CMD_SEARCH_ADD_DB',	68);
define('CMD_SEARCH_FINISH',	69);
define('CMD_SEARCH_DRAW_TPOOL',	70);
define('CMD_SEARCH_ADD_LOG',	71);
define('CMD_SEARCH_GET_SYNONYMS',	72);
define('CMD_SEARCH_SCWS_GET',	73);
define('CMD_QUERY_GET_STRING',	96);
define('CMD_QUERY_GET_TERMS',	97);
define('CMD_QUERY_GET_CORRECTED',	98);
define('CMD_QUERY_GET_EXPANDED',	99);
define('CMD_OK',	128);
define('CMD_ERR',	129);
define('CMD_SEARCH_RESULT_DOC',	140);
define('CMD_SEARCH_RESULT_FIELD',	141);
define('CMD_SEARCH_RESULT_FACETS',	142);
define('CMD_DOC_TERM',	160);
define('CMD_DOC_VALUE',	161);
define('CMD_DOC_INDEX',	162);
define('CMD_INDEX_REQUEST',	163);
define('CMD_IMPORT_HEADER',	191);
define('CMD_SEARCH_SET_SORT',	192);
define('CMD_SEARCH_SET_CUT',	193);
define('CMD_SEARCH_SET_NUMERIC',	194);
define('CMD_SEARCH_SET_COLLAPSE',	195);
define('CMD_SEARCH_KEEPALIVE',	196);
define('CMD_SEARCH_SET_FACETS',	197);
define('CMD_SEARCH_SCWS_SET',	198);
define('CMD_QUERY_INIT',	224);
define('CMD_QUERY_PARSE',	225);
define('CMD_QUERY_TERM',	226);
define('CMD_QUERY_RANGEPROC',	227);
define('CMD_QUERY_RANGE',	228);
define('CMD_QUERY_VALCMP',	229);
define('CMD_QUERY_PREFIX',	230);
define('CMD_QUERY_PARSEFLAG',	231);
define('CMD_SORT_TYPE_RELEVANCE',	0);
define('CMD_SORT_TYPE_DOCID',	1);
define('CMD_SORT_TYPE_VALUE',	2);
define('CMD_SORT_TYPE_MULTI',	3);
define('CMD_SORT_TYPE_MASK',	0x3f);
define('CMD_SORT_FLAG_ASCENDING',	0x80);
define('CMD_QUERY_OP_AND',	0);
define('CMD_QUERY_OP_OR',	1);
define('CMD_QUERY_OP_AND_NOT',	2);
define('CMD_QUERY_OP_XOR',	3);
define('CMD_QUERY_OP_AND_MAYBE',	4);
define('CMD_QUERY_OP_FILTER',	5);
define('CMD_RANGE_PROC_STRING',	0);
define('CMD_RANGE_PROC_DATE',	1);
define('CMD_RANGE_PROC_NUMBER',	2);
define('CMD_VALCMP_LE',	0);
define('CMD_VALCMP_GE',	1);
define('CMD_PARSE_FLAG_BOOLEAN',	1);
define('CMD_PARSE_FLAG_PHRASE',	2);
define('CMD_PARSE_FLAG_LOVEHATE',	4);
define('CMD_PARSE_FLAG_BOOLEAN_ANY_CASE',	8);
define('CMD_PARSE_FLAG_WILDCARD',	16);
define('CMD_PARSE_FLAG_PURE_NOT',	32);
define('CMD_PARSE_FLAG_PARTIAL',	64);
define('CMD_PARSE_FLAG_SPELLING_CORRECTION',	128);
define('CMD_PARSE_FLAG_SYNONYM',	256);
define('CMD_PARSE_FLAG_AUTO_SYNONYMS',	512);
define('CMD_PARSE_FLAG_AUTO_MULTIWORD_SYNONYMS',	1536);
define('CMD_PREFIX_NORMAL',	0);
define('CMD_PREFIX_BOOLEAN',	1);
define('CMD_INDEX_WEIGHT_MASK',	0x3f);
define('CMD_INDEX_FLAG_WITHPOS',	0x40);
define('CMD_INDEX_FLAG_SAVEVALUE',	0x80);
define('CMD_INDEX_FLAG_CHECKSTEM',	0x80);
define('CMD_VALUE_FLAG_NUMERIC',	0x80);
define('CMD_INDEX_REQUEST_ADD',	0);
define('CMD_INDEX_REQUEST_UPDATE',	1);
define('CMD_INDEX_SYNONYMS_ADD',	0);
define('CMD_INDEX_SYNONYMS_DEL',	1);
define('CMD_SCWS_GET_VERSION',	1);
define('CMD_SCWS_GET_RESULT',	2);
define('CMD_SCWS_GET_TOPS',	3);
define('CMD_SCWS_HAS_WORD',	4);
define('CMD_SCWS_SET_IGNORE',	50);
define('CMD_SCWS_SET_MULTI',	51);
define('CMD_SCWS_SET_DUALITY',	52);
define('CMD_ERR_UNKNOWN',	600);
define('CMD_ERR_NOPROJECT',	401);
define('CMD_ERR_TOOLONG',	402);
define('CMD_ERR_INVALIDCHAR',	403);
define('CMD_ERR_EMPTY',	404);
define('CMD_ERR_NOACTION',	405);
define('CMD_ERR_RUNNING',	406);
define('CMD_ERR_REBUILDING',	407);
define('CMD_ERR_WRONGPLACE',	450);
define('CMD_ERR_WRONGFORMAT',	451);
define('CMD_ERR_EMPTYQUERY',	452);
define('CMD_ERR_TIMEOUT',	501);
define('CMD_ERR_IOERR',	502);
define('CMD_ERR_NOMEM',	503);
define('CMD_ERR_BUSY',	504);
define('CMD_ERR_UNIMP',	505);
define('CMD_ERR_NODB',	506);
define('CMD_ERR_DBLOCKED',	507);
define('CMD_ERR_CREATE_HOME',	508);
define('CMD_ERR_INVALID_HOME',	509);
define('CMD_ERR_REMOVE_HOME',	510);
define('CMD_ERR_REMOVE_DB',	511);
define('CMD_ERR_STAT',	512);
define('CMD_ERR_OPEN_FILE',	513);
define('CMD_ERR_TASK_CANCELED',	514);
define('CMD_ERR_XAPIAN',	515);
define('CMD_OK_INFO',	200);
define('CMD_OK_PROJECT',	201);
define('CMD_OK_QUERY_STRING',	202);
define('CMD_OK_DB_TOTAL',	203);
define('CMD_OK_QUERY_TERMS',	204);
define('CMD_OK_QUERY_CORRECTED',	205);
define('CMD_OK_SEARCH_TOTAL',	206);
define('CMD_OK_RESULT_BEGIN',	CMD_OK_SEARCH_TOTAL);
define('CMD_OK_RESULT_END',	207);
define('CMD_OK_TIMEOUT_SET',	208);
define('CMD_OK_FINISHED',	209);
define('CMD_OK_LOGGED',	210);
define('CMD_OK_RQST_FINISHED',	250);
define('CMD_OK_DB_CHANGED',	251);
define('CMD_OK_DB_INFO',	252);
define('CMD_OK_DB_CLEAN',	253);
define('CMD_OK_PROJECT_ADD',	254);
define('CMD_OK_PROJECT_DEL',	255);
define('CMD_OK_DB_COMMITED',	256);
define('CMD_OK_DB_REBUILD',	257);
define('CMD_OK_LOG_FLUSHED',	258);
define('CMD_OK_DICT_SAVED',	259);
define('CMD_OK_RESULT_SYNONYMS',	280);
define('CMD_OK_SCWS_RESULT',	290);
define('CMD_OK_SCWS_TOPS',	291);
define('PACKAGE_BUGREPORT',	"http://www.xunsearch.com/bugs");
define('PACKAGE_NAME',	"xunsearch");
define('PACKAGE_TARNAME',	"xunsearch");
define('PACKAGE_URL',	"");
define('PACKAGE_VERSION',	"1.4.5-dev");
/* end the cmd defination */

