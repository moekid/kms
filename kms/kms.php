<?php
$kms_server = 'kms.moerats.com';

if (isset($_GET['clean'])) {
    header("Content-type: octet/stream");
    header("Content-disposition:attachment;filename=clean.bat;");
    echo "slmgr /upk";
    echo "\r\nslmgr /ckms";
    echo "\r\nslmgr /rearm";
}
else if (isset($_GET['kms'])) {
    header("Content-type: octet/stream");
    header("Content-disposition:attachment;filename=kms.bat;");
    echo "slmgr /skms ".$kms_server;
    echo "\r\nslmgr /ipk ";
    switch ($_GET['kms']) {
        case 'Windows Server 2019 ARM64':
            echo 'GRFBW-QNDC4-6QBHG-CCK3B-2PR88';
            break;
        case 'Windows Server 2019 Azure Core':
            echo 'FDNH6-VW9RW-BXPJ7-4XTYG-239TB';
            break;
        case 'Windows Server 2019 Datacenter':
            echo 'WMDGN-G9PQG-XVVXX-R3X43-63DFG';
            break;
        case 'Windows Server 2019 Essentials':
            echo 'WVDHN-86M7X-466P6-VHXV7-YY726';
            break;
        case 'Windows Server 2019 Standard':
            echo 'N69G4-B89J2-4G8F4-WWYCC-J464C';
            break;
        case 'Windows Server 2019 Datacenter (Semi-Annual Channel v.1809)':
            echo '6NMRW-2C8FM-D24W7-TQWMY-CWH2D';
            break;
        case 'Windows Server 2019 Standard (Semi-Annual Channel v.1809)':
            echo 'N2KJX-J94YW-TQVFB-DG9YT-724CC';
            break;
        case 'Windows Server 2019 Standard [Preview]':
            echo 'MFY9F-XBN2F-TYFMP-CCV49-RMYVH';
            break;
        case 'Windows Server 2019 Datacenter [Preview]':
            echo '6XBNX-4JQGW-QX6QG-74P76-72V67';
            break;
        case 'Windows 10 Enterprise LTSC 2019':
            echo 'M7XTQ-FN8P6-TTKYV-9D4CC-J462D';
            break;
        case 'Windows 10 Enterprise LTSC 2019 N':
            echo '92NFX-8DJQP-P6BBQ-THF9C-7CG2H';
            break;
        case 'Windows 10 Enterprise G':
            echo 'YYVX9-NTFWV-6MDM3-9PT4T-4M68B';
            break;
        case 'Windows 10 Enterprise G N':
            echo '44RPN-FTY23-9VTTB-MP9BX-T84FV';
            break;
        case 'Windows 10 Enterprise 2016 LTSB':
            echo 'DCPHK-NFMTC-H88MJ-PFHPY-QJ4BJ';
            break;
        case 'Windows 10 Enterprise 2016 LTSB N':
            echo 'QFFDN-GRT3P-VKWWX-X7T3R-8B639';
            break;
        case 'Windows 10 Home / Core':
            echo 'TX9XD-98N7V-6WMQ6-BX7FG-H8Q99';
            break;
        case 'Windows 10 Home / Core Country Specific':
            echo 'PVMJN-6DFY6-9CCP6-7BKTT-D3WVR';
            break;
        case 'Windows 10 Home / Core N':
            echo '3KHY7-WNT83-DGQKR-F7HPR-844BM';
            break;
        case 'Windows 10 Home / Core Single Language':
            echo '7HNRX-D7KGG-3K4RQ-4WPJ4-YTDFH';
            break;
        case 'Windows 10 Education':
            echo 'NW6C2-QMPVW-D7KKK-3GKT6-VCFB2';
            break;
        case 'Windows 10 Education N':
            echo '2WH4N-8QGBV-H22JP-CT43Q-MDWWJ';
            break;
        case 'Windows 10 Enterprise':
            echo 'NPPR9-FWDCX-D2C8J-H872K-2YT43';
            break;
        case 'Windows 10 Enterprise [Preview]':
            echo 'QNMXX-GCD3W-TCCT4-872RV-G6P4J';
            break;
        case 'Windows 10 Enterprise S':
            echo 'H76BG-QBNM7-73XY9-V6W2T-684BJ';
            break;
        case 'Windows 10 Enterprise 2015 LTSB':
            echo 'WNMTR-4C88C-JK8YV-HQ7T2-76DF9';
            break;
        case 'Windows 10 Enterprise 2015 LTSB N':
            echo '2F77B-TNFGY-69QQF-B8YKP-D69TJ';
            break;
        case 'Windows 10 Enterprise N':
            echo 'DPH2V-TTNVB-4X9Q3-TJR4H-KHJW4';
            break;
        case 'Windows 10 Enterprise S N':
            echo 'X4R4B-NV6WD-PKTVK-F98BH-4C2J8';
            break;
        case 'Windows 10 Professional Workstation':
            echo 'NRG8B-VKK3Q-CXVCJ-9G2XF-6Q84J';
            break;
        case 'Windows 10 Professional Workstation N':
            echo '9FNHH-K3HBT-3W4TD-6383H-6XYWF';
            break;
        case 'Windows 10 Professional':
            echo 'W269N-WFGWX-YVC9B-4J6C9-T83GX';
            break;
        case 'Windows 10 Professional Education':
            echo '6TP4R-GNPTD-KYYHQ-7B7DP-J447Y';
            break;
        case 'Windows 10 Professional Education N':
            echo 'YVWGF-BXNMC-HTQYQ-CPQ99-66QFC';
            break;
        case 'Windows 10 Professional N':
            echo 'MH37W-N47XK-V7XM9-C7227-GCQG9';
            break;
        case 'Windows 10 Professional [Preview]':
            echo 'XQHPH-N4D9W-M8P96-DPDFP-TMVPY';
            break;
        case 'Windows 10 Professional WMC [Pre-Release]':
            echo 'NKPM6-TCVPT-3HRFX-Q4H9B-QJ34Y';
            break;
        case 'Windows 10 Enterprise for Virtual Desktops':
            echo 'CPWHC-NT2C7-VYW78-DHDB2-PG3GK';
            break;
        case 'Windows 10 Remote Server':
            echo '7NBT4-WGBQX-MP4H7-QXFF8-YP3KX';
            break;
        case 'Windows 10 S (Lean)':
            echo 'NBTWJ-3DR69-3C4V8-C26MC-GQ9M6';
            break;
        case 'Windows 10 IoT Core [Pre-Release]':
            echo '7NX88-X6YM3-9Q3YT-CCGBF-KBVQF';
            break;
        case 'Windows 10 Core Connected [Pre-Release]':
            echo 'DJMYQ-WN6HG-YJ2YX-82JDB-CWFCW';
            break;
        case 'Windows 10 Core Connected N [Pre-Release]':
            echo 'JQNT7-W63G4-WX4QX-RD9M9-6CPKM';
            break;
        case 'Windows 10 Core Connected Single Language [Pre-Release]':
            echo 'QQMNF-GPVQ6-BFXGG-GWRCX-7XKT7';
            break;
        case 'Windows 10 Core Connected Country Specific [Pre-Release]':
            echo 'FTNXM-J4RGP-MYQCV-RVM8R-TVH24';
            break;
        case 'Windows 10 Professional S [Pre-Release]':
            echo '3NF4D-GF9GY-63VKH-QRC3V-7QW8P';
            break;
        case 'Windows 10 Professional S N [Pre-Release]':
            echo 'KNDJ3-GVHWT-3TV4V-36K8Y-PR4PF';
            break;
        case 'Windows 10 Professional Student [Pre-Release]':
            echo 'YNXW3-HV3VB-Y83VG-KPBXM-6VH3Q';
            break;
        case 'Windows 10 Professional Student N [Pre-Release]':
            echo '8G9XJ-GN6PJ-GW787-MVV7G-GMR99';
            break;
        case 'Windows 7 Enterprise':
            echo '33PXH-7Y6KF-2VJC9-XBBR8-HVTHH';
            break;
        case 'Windows 7 Enterprise E':
            echo 'C29WB-22CC8-VJ326-GHFJW-H9DH4';
            break;
        case 'Windows 7 Enterprise N':
            echo 'YDRBP-3D83W-TY26F-D46B2-XCKRJ';
            break;
        case 'Windows 7 Professional':
            echo 'FJ82H-XT6CR-J8D7P-XQJJ2-GPDD4';
            break;
        case 'Windows 7 Professional E':
            echo 'W82YF-2Q76Y-63HXB-FGJG9-GF7QX';
            break;
        case 'Windows 7 Professional N':
            echo 'MRPKT-YTG23-K7D7T-X2JMM-QY7MG';
            break;
        case 'Windows 7 Embedded POSReady':
            echo 'YBYF6-BHCR3-JPKRB-CDW7B-F9BK4';
            break;
        case 'Windows 7 Embedded Standard':
            echo 'XGY72-BRBBT-FF8MH-2GG8H-W7KCW';
            break;
        case 'Windows 7 ThinPC':
            echo '73KQT-CD9G6-K7TQG-66MRP-CQ22C';
            break;
        case 'Windows 8 Core / Server 2012':
            echo 'BN3D2-R7TKB-3YPBD-8DRP2-27GG4';
            break;
        case 'Windows 8 Core / Server 2012 Country Specific':
            echo '4K36P-JN4VD-GDC6V-KDT89-DYFKP';
            break;
        case 'Windows 8 Core / Server 2012 N':
            echo '8N2M2-HWPGY-7PGT9-HGDD8-GVGGY';
            break;
        case 'Windows 8 Core / Server 2012 Single Language':
            echo '2WN2H-YGCQR-KFX6K-CD6TF-84YXQ';
            break;
        case 'Windows 8 Professional WMC':
            echo 'GNBB8-YVD74-QJHX6-27H4K-8QHDG';
            break;
        case 'Windows 8 Embedded Industry Professional':
            echo 'RYXVT-BNQG7-VD29F-DBMRY-HT73M';
            break;
        case 'Windows 8 Embedded Industry Enterprise':
            echo 'NKB3R-R2F8T-3XCDP-7Q2KW-XWYQ2';
            break;
        case 'Windows 8 Enterprise':
            echo '32JNW-9KQ84-P47T8-D8GGY-CWCK7';
            break;
        case 'Windows 8 Enterprise N':
            echo 'JMNMF-RHW7P-DMY6X-RF3DR-X2BQT';
            break;
        case 'Windows 8 Professional':
            echo 'NG4HW-VH26C-733KW-K6F98-J8CK4';
            break;
        case 'Windows 8 Professional N':
            echo 'XCVCF-2NXM9-723PB-MHCB7-2RYQQ';
            break;
        case 'Windows 8.1 Core':
            echo 'M9Q9P-WNJJT-6PXPY-DWX8H-6XWKK';
            break;
        case 'Windows 8.1 Core ARM64':
            echo 'XYTND-K6QKT-K2MRH-66RTM-43JKP';
            break;
        case 'Windows 8.1 Core Country Specific':
            echo 'NCTT7-2RGK8-WMHRF-RY7YQ-JTXG3';
            break;
        case 'Windows 8.1 Core N':
            echo '7B9N3-D94CG-YTVHR-QBPX3-RJP64';
            break;
        case 'Windows 8.1 Core Single Language':
            echo 'BB6NG-PQ82V-VRDPW-8XVD2-V8P66';
            break;
        case 'Windows 8.1 Professional Student':
            echo 'MX3RK-9HNGX-K3QKC-6PJ3F-W8D7B';
            break;
        case 'Windows 8.1 Professional Student N':
            echo 'TNFGH-2R6PB-8XM3K-QYHX2-J4296';
            break;
        case 'Windows 8.1 Professional WMC':
            echo '789NJ-TQK6T-6XTH8-J39CJ-J8D3P';
            break;
        case 'Windows 8.1 Core Connected':
            echo '3PY8R-QHNP9-W7XQD-G6DPH-3J2C9';
            break;
        case 'Windows 8.1 Core Connected Country Specific':
            echo 'R962J-37N87-9VVK2-WJ74P-XTMHR';
            break;
        case 'Windows 8.1 Core Connected N':
            echo 'Q6HTR-N24GM-PMJFP-69CD8-2GXKR';
            break;
        case 'Windows 8.1 Core Connected Single Language':
            echo 'KF37N-VDV38-GRRTV-XH8X6-6F3BB';
            break;
        case 'Windows 8.1 Enterprise':
            echo 'MHF9N-XY6XB-WVXMC-BTDCT-MKKG7';
            break;
        case 'Windows 8.1 Enterprise N':
            echo 'TT4HM-HN7YT-62K67-RGRQJ-JFFXW';
            break;
        case 'Windows 8.1 Professional':
            echo 'GCRJD-8NW9H-F2CDX-CCM8D-9D6T9';
            break;
        case 'Windows 8.1 Professional N':
            echo 'HMCNV-VVBFX-7HMBH-CTY9B-B4FXY';
            break;
        case 'Windows 8.1 Embedded Industry Professional':
            echo 'NMMPB-38DD4-R2823-62W8D-VXKJB';
            break;
        case 'Windows 8.1 Embedded Industry Automotive':
            echo 'VHXM3-NR6FT-RY6RT-CK882-KW2CJ';
            break;
        case 'Windows 8.1 Embedded Industry Enterprise':
            echo 'FNFKF-PWTVT-9RC8H-32HB2-JB34X';
            break;
        case 'Windows 8.1 Enterprise [Preview]':
            echo '2MP7K-98NK8-WPVF3-Q2WDG-VMD98';
            break;
        case 'Windows 8.1 Professional (Blue) [Preview]':
            echo 'MTWNQ-CKDHJ-3HXW9-Q2PFX-WB2HQ';
            break;
        case 'Windows 8 Professional WMC [RC]':
            echo 'MY4N9-TGH34-4X4VY-8FG2T-RRDPV';
            break;
        case 'Windows 8.x [Preview]':
            echo 'MPWP3-DXNP9-BRD79-W8WFP-3YFJ6';
            break;
        case 'Windows Server Next HI [Preview]':
            echo '7VX4N-3VDHQ-VYGHB-JXJVP-9QB26';
            break;
        case 'Windows Server 2008 Web':
            echo 'WYR28-R7TFJ-3X2YQ-YCY4H-M249D';
            break;
        case 'Windows Server 2008 HPC Edition':
            echo 'RCTX3-KWVHP-BR6TB-RB6DM-6X7HP';
            break;
        case 'Windows Server 2008 Standard':
            echo 'TM24T-X9RMF-VWXK6-X8JC9-BFGM2';
            break;
        case 'Windows Server 2008 Standard without Hyper-V':
            echo 'W7VD6-7JFBR-RX26B-YKQ3Y-6FFFJ';
            break;
        case 'Windows Server 2008 Enterprise':
            echo 'YQGMW-MPWTJ-34KDK-48M3W-X4Q6V';
            break;
        case 'Windows Server 2008 Enterprise without Hyper-V':
            echo '39BXF-X8Q23-P2WWT-38T2F-G3FPG';
            break;
        case 'Windows Server 2008 Datacenter':
            echo '7M67G-PC374-GR742-YH8V4-TCBY3';
            break;
        case 'Windows Server 2008 Datacenter without Hyper-V':
            echo '22XQ2-VRXRG-P8D42-K34TD-G3QQC';
            break;
        case 'Windows Server 2008 for Itanium Systems':
            echo '4DWFP-JF3DJ-B7DTH-78FJB-PDRHK';
            break;
        case 'Windows MultiPoint Server 2010':
            echo '736RG-XDKJK-V34PF-BHK87-J6X3K';
            break;
        case 'Windows Server 2008 R2 Web':
            echo '6TPJF-RBVHG-WBW2R-86QPH-6RTM4';
            break;
        case 'Windows Server 2008 R2 HPC Edition':
            echo 'TT8MH-CG224-D3D7Q-498W2-9QCTX';
            break;
        case 'Windows Server 2008 R2 Standard':
            echo 'YC6KT-GKW9T-YTKYR-T4X34-R7VHC';
            break;
        case 'Windows Server 2008 R2 Enterprise':
            echo '489J6-VHDMP-X63PK-3K798-CPX3Y';
            break;
        case 'Windows Server 2008 R2 Datacenter':
            echo '74YFP-3QFB3-KQT8W-PMXWJ-7M648';
            break;
        case 'Windows Server 2008 R2 for Itanium Systems':
            echo 'GT63C-RJFQ3-4GMB6-BRFB9-CB83V';
            break;
        case 'Windows Server 2012 Datacenter':
            echo '48HP8-DN98B-MYWDG-T2DCC-8W83P';
            break;
        case 'Windows Server 2012 MultiPoint Premium':
            echo 'XNH6W-2V9GX-RGJ4K-Y8X6F-QGJ2G';
            break;
        case 'Windows Server 2012 MultiPoint Standard':
            echo 'HM7DN-YVMH3-46JC3-XYTG7-CYQJJ';
            break;
        case 'Windows Server 2012 Standard':
            echo 'XC9B7-NBPP2-83J2H-RHMBY-92BT4';
            break;
        case 'Windows Server 2012 R2 Cloud Storage':
            echo '3NPTF-33KPT-GGBPR-YX76B-39KDD';
            break;
        case 'Windows Server 2012 R2 Datacenter':
            echo 'W3GGN-FT8W3-Y4M27-J84CP-Q3VJ9';
            break;
        case 'Windows Server 2012 R2 Essentials':
            echo 'KNC87-3J2TX-XB4WP-VCPJV-M4FWM';
            break;
        case 'Windows Server 2012 R2 Standard':
            echo 'D2N9P-3P6X9-2R39C-7RTCD-MDVJX';
            break;
        case 'Windows Server 2016 Azure Core':
            echo 'VP34G-4NPPG-79JTQ-864T4-R3MQX';
            break;
        case 'Windows Server 2016 Cloud Storage':
            echo 'QN4C6-GBJD2-FB422-GHWJK-GJG2R';
            break;
        case 'Windows Server 2016 Datacenter':
            echo 'CB7KF-BWN84-R7R2Y-793K2-8XDDG';
            break;
        case 'Windows Server 2016 Essentials':
            echo 'JCKRF-N37P4-C2D82-9YXRT-4M63B';
            break;
        case 'Windows Server 2016 Standard':
            echo 'WC2BQ-8NRM3-FDDYY-2BFGV-KHKQY';
            break;
        case 'Windows Server 2016 ARM64':
            echo 'K9FYF-G6NCK-73M32-XMVPY-F9DRR';
            break;
        case 'Windows Server 2016 Datacenter (Semi-Annual Channel v.1803)':
            echo '2HXDN-KRXHB-GPYC7-YCKFJ-7FVDG';
            break;
        case 'Windows Server 2016 Standard (Semi-Annual Channel v.1803)':
            echo 'PTXN8-JFHJM-4WC78-MPCBR-9W4KR';
            break;
        case 'Windows Server 2016 Datacenter [Preview]':
            echo 'VRDD2-NVGDP-K7QG8-69BR4-TVFHB';
            break;
        case 'Windows Vista Business':
            echo 'YFKBB-PQJJV-G996G-VWGXY-2V3X8';
            break;
        case 'Windows Vista Business N':
            echo 'HMBQG-8H2RH-C77VX-27R82-VMQBT';
            break;
        case 'Windows Vista Enterprise':
            echo 'VKK3X-68KWM-X2YGT-QR4M6-4BWMV';
            break;
        case 'Windows Vista Enterprise N':
            echo 'VTC42-BM838-43QHV-84HX6-XJXKV';
            break;
        case 'Windows Vista Business [Preview 1]':
            echo 'XQYF4-QVCMY-YXQRD-9QPV8-3YP9V';
            break;
        case 'Windows Vista Business [Preview 2]':
            echo 'YVT36-YVCP2-J97GQ-7T22R-RWV8P';
            break;
        case 'Windows Vista Business N [Preview]':
            echo 'HGBJ9-RWD6M-6HDGW-6T2XD-JQ66F';
            break;
        case 'Windows Vista Enterprise [Preview 1]':
            echo '3JHG3-Y66GP-B7F3K-JFVX2-VBH7K';
            break;
        case 'Windows Vista Enterprise [Beta-2 build 5384]':
            echo 'MF9PG-RQK7R-26BPJ-TWFYK-RHXCM';
            break;
        case 'Windows Longhorn Web [Preview]':
            echo 'MDRCM-4WKCW-J93FF-J9Q48-M6KBB';
            break;
        case 'Windows Longhorn Standard':
            echo 'Q37JX-P3HHB-GKRH2-PDBKG-GGXPW';
            break;
        case 'Windows Longhorn Enterprise':
            echo '7KYMQ-R788Q-4RF69-KTWKM-92PFJ';
            break;
        case 'Windows Longhorn Datacenter [Preview]':
            echo 'HR8VD-7DHG2-48378-M9D73-28F4T';
            break;
        case 'Windows Longhorn for Itanium Systems [Preview]':
            echo 'CWV9H-PHGPW-V93WV-QBQV9-8V336';
            break;
        default:
            header("Location: .");
            exit;
    }
    echo "\r\nslmgr /ato";
    echo "\r\nslmgr /xpr";
    exit;
}
else{
    header("Location: .");
}
?>