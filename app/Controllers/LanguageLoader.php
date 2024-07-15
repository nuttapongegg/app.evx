<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class LanguageLoader extends Controller
{
    public function load($language = 'th')
    {
        // เรียกใช้งาน service('language') เพื่อโหลดไฟล์ภาษา
        $languageService = service('language');
        $languageService->setLocale($language); // ตั้งค่าภาษาที่ต้องการใช้งาน

        // สร้างข้อมูล JSON เพื่อส่งกลับ
        $data = [
            'why_choose' => $languageService->getLine('message.why_choose'),
            'getting_know' => $languageService->getLine('message.getting_know'),
            'evx' => $languageService->getLine('message.evx'),
            'evx_application' => $languageService->getLine('message.evx_application'),
            'ac_charger' => $languageService->getLine('message.ac_charger'),
            'data_ac_charger' => $languageService->getLine('message.data_ac_charger'),
            'dc_charger' => $languageService->getLine('message.dc_charger'),
            'data_dc_charger' => $languageService->getLine('message.data_dc_charger'),
            'app_feature' => $languageService->getLine('message.app_feature'),
            'feature_easy' => $languageService->getLine('message.feature_easy'),
            'feature_station' => $languageService->getLine('message.feature_station'),
            'feature_payment' => $languageService->getLine('message.feature_payment'),
            'feature_plan' => $languageService->getLine('message.feature_plan'),
            'feature_status' => $languageService->getLine('message.feature_status'),
            'feature_history' => $languageService->getLine('message.feature_history'),
            'feature_updated' => $languageService->getLine('message.feature_updated'),
            'how_to_use_header' => $languageService->getLine('message.how_to_use_header'),
            'how_to_use_body' => $languageService->getLine('message.how_to_use_body'),
            'login' => $languageService->getLine('message.login'),
            'login_detail' => $languageService->getLine('message.login_detail'),
            'map' => $languageService->getLine('message.map'),
            'charging_point' => $languageService->getLine('message.charging_point'),
            'booking' => $languageService->getLine('message.booking'),
            'profile' => $languageService->getLine('message.profile'),
            'wallet' => $languageService->getLine('message.wallet'),
            'qr_code' => $languageService->getLine('message.qr_code'),
            'reschedule' => $languageService->getLine('message.reschedule'),
            'example' => $languageService->getLine('message.example'),
            'faq' => $languageService->getLine('message.faq'),
            'faq_body' => $languageService->getLine('message.faq_body'),
            'rain' => $languageService->getLine('message.rain'),
            'rain_body' => $languageService->getLine('message.rain_body'),
            'charging' => $languageService->getLine('message.charging'),
            'charging_body' => $languageService->getLine('message.charging_body'),
            'request_refund' => $languageService->getLine('message.request_refund'),
            'request_refund_body' => $languageService->getLine('message.request_refund_body'),
            'download' => $languageService->getLine('message.download'),
            'download_body' => $languageService->getLine('message.download_body'),
            'service_rates' => $languageService->getLine('message.service_rates'),
            'service_rates_body' => $languageService->getLine('message.service_rates_body'),
            'add_money' => $languageService->getLine('message.add_money'),
            'add_money_body' => $languageService->getLine('message.add_money_body'),
            // เพิ่มข้อมูลอื่นๆ ตามต้องการ
        ];

        // ส่งกลับเป็น JSON
        return $this->response->setJSON($data);
    }
}
