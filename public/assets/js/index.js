document.addEventListener("DOMContentLoaded", function() {
    setLanguage('th');
    let currentFeatureElement = document.getElementById('feature_1'); // ตั้งค่าค่าเริ่มต้น

    function showFeature(featureId, featureElement) {
        // ซ่อนทุกเนื้อหา
        document.querySelectorAll('.feature-content').forEach(function(content) {
            content.classList.remove('active');
        });
        document.getElementById(featureId).classList.add('active');

        // รีเซ็ตสถานะ active ของปุ่ม
        document.querySelectorAll('.feature').forEach(function(feature) {
            feature.classList.remove('active');
        });
        featureElement.classList.add('active');

        // เก็บปุ่มที่ถูกคลิก
        currentFeatureElement = featureElement;
    }

    // เพิ่มการคลิกเหตุการณ์สำหรับทุกปุ่ม
    document.querySelectorAll('.feature').forEach(function(feature) {
        feature.addEventListener('click', function(event) {
            event.preventDefault();
            const featureId = this.id.replace('feature_', '');
            showFeature(featureId, this);
        });
    });

    // แสดงฟีเจอร์แรกโดยเริ่มต้น
    showFeature('1', currentFeatureElement);
});
function setLanguage(language) {
    document.getElementById('language-dropdown').innerText = language;
    $.ajax({
        type: 'GET',
        url: `/loadLang/${language}`,
        contentType: 'application/json; charset=utf-8',
        success: function (data) {
            console.log(data); // ดูข้อมูลที่ได้รับกลับมา

            // กำหนดข้อมูลให้กับ element ใน HTML
            $('#why_choose').text(data.why_choose);
            $('#getting_know').text(data.getting_know);
            $('#evx').text(data.evx);
            $('#evx_application').text(data.evx_application);
            $('#ac_charger').text(data.ac_charger);
            $('#data_ac_charger').text(data.data_ac_charger);
            $('#dc_charger').text(data.dc_charger);
            $('#data_dc_charger').text(data.data_dc_charger);
            $('#app_feature').text(data.app_feature);
            $('#feature_easy').text(data.feature_easy);
            $('#feature_station').text(data.feature_station);
            $('#feature_payment').text(data.feature_payment);
            $('#feature_plan').text(data.feature_plan);
            $('#feature_status').text(data.feature_status);
            $('#feature_history').text(data.feature_history);
            $('#feature_updated').text(data.feature_updated);
            $('#how_to_use_header').text(data.how_to_use_header);
            $('#how_to_use_body').text(data.how_to_use_body);
            $('#login').text(data.login);
            $('#login_detail').text(data.login_detail);
            $('#map').text(data.map);
            $('#charging_point').text(data.charging_point);
            $('#booking').text(data.booking);
            $('#profile').text(data.profile);
            $('#wallet').text(data.wallet);
            $('#qr_code').text(data.qr_code);
            $('#reschedule').text(data.reschedule);
            $('#example').text(data.example);
            $('#faq').text(data.faq);
            $('#faq_body').text(data.faq_body);
            $('#rain').text(data.rain);
            $('#rain_body').text(data.rain_body);
            $('#charging').text(data.charging);
            $('#charging_body').text(data.charging_body);
            $('#request_refund').text(data.request_refund);
            $('#request_refund_body').text(data.request_refund_body);
            $('#download').text(data.download);
            $('#download_body').text(data.download_body);
            $('#service_rates').text(data.service_rates);
            $('#service_rates_body').text(data.service_rates_body);
            $('#add_money').text(data.add_money);
            $('#add_money_body').text(data.add_money_body);
        },
        error: function (xhr, status, error) {
            console.error('Error loading language:', xhr); // แสดงข้อผิดพลาดในการร้องขอ
        }
    });
}

