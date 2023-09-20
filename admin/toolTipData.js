var FiltersEnabled = 0; // if your not going to use transitions or filters in any of the tips set this to 0
var spacer="&nbsp; &nbsp; &nbsp; ";

// email notifications to admin
notifyAdminNewMembers0Tip=["", spacer+"No email notifications to admin."];
notifyAdminNewMembers1Tip=["", spacer+"Notify admin only when a new member is waiting for approval."];
notifyAdminNewMembers2Tip=["", spacer+"Notify admin for all new sign-ups."];

// visitorSignup
visitorSignup0Tip=["", spacer+"If this option is selected, visitors will not be able to join this group unless the admin manually moves them to this group from the admin area."];
visitorSignup1Tip=["", spacer+"If this option is selected, visitors can join this group but will not be able to sign in unless the admin approves them from the admin area."];
visitorSignup2Tip=["", spacer+"If this option is selected, visitors can join this group and will be able to sign in instantly with no need for admin approval."];

// DONVI table
DONVI_addTip=["",spacer+"This option allows all members of the group to add records to the 'DONVI' table. A member who adds a record to the table becomes the 'owner' of that record."];

DONVI_view0Tip=["",spacer+"This option prohibits all members of the group from viewing any record in the 'DONVI' table."];
DONVI_view1Tip=["",spacer+"This option allows each member of the group to view only his own records in the 'DONVI' table."];
DONVI_view2Tip=["",spacer+"This option allows each member of the group to view any record owned by any member of the group in the 'DONVI' table."];
DONVI_view3Tip=["",spacer+"This option allows each member of the group to view all records in the 'DONVI' table."];

DONVI_edit0Tip=["",spacer+"This option prohibits all members of the group from modifying any record in the 'DONVI' table."];
DONVI_edit1Tip=["",spacer+"This option allows each member of the group to edit only his own records in the 'DONVI' table."];
DONVI_edit2Tip=["",spacer+"This option allows each member of the group to edit any record owned by any member of the group in the 'DONVI' table."];
DONVI_edit3Tip=["",spacer+"This option allows each member of the group to edit any records in the 'DONVI' table, regardless of their owner."];

DONVI_delete0Tip=["",spacer+"This option prohibits all members of the group from deleting any record in the 'DONVI' table."];
DONVI_delete1Tip=["",spacer+"This option allows each member of the group to delete only his own records in the 'DONVI' table."];
DONVI_delete2Tip=["",spacer+"This option allows each member of the group to delete any record owned by any member of the group in the 'DONVI' table."];
DONVI_delete3Tip=["",spacer+"This option allows each member of the group to delete any records in the 'DONVI' table."];

// CanBo table
CanBo_addTip=["",spacer+"This option allows all members of the group to add records to the 'Canbo' table. A member who adds a record to the table becomes the 'owner' of that record."];

CanBo_view0Tip=["",spacer+"This option prohibits all members of the group from viewing any record in the 'Canbo' table."];
CanBo_view1Tip=["",spacer+"This option allows each member of the group to view only his own records in the 'Canbo' table."];
CanBo_view2Tip=["",spacer+"This option allows each member of the group to view any record owned by any member of the group in the 'Canbo' table."];
CanBo_view3Tip=["",spacer+"This option allows each member of the group to view all records in the 'Canbo' table."];

CanBo_edit0Tip=["",spacer+"This option prohibits all members of the group from modifying any record in the 'Canbo' table."];
CanBo_edit1Tip=["",spacer+"This option allows each member of the group to edit only his own records in the 'Canbo' table."];
CanBo_edit2Tip=["",spacer+"This option allows each member of the group to edit any record owned by any member of the group in the 'Canbo' table."];
CanBo_edit3Tip=["",spacer+"This option allows each member of the group to edit any records in the 'Canbo' table, regardless of their owner."];

CanBo_delete0Tip=["",spacer+"This option prohibits all members of the group from deleting any record in the 'Canbo' table."];
CanBo_delete1Tip=["",spacer+"This option allows each member of the group to delete only his own records in the 'Canbo' table."];
CanBo_delete2Tip=["",spacer+"This option allows each member of the group to delete any record owned by any member of the group in the 'Canbo' table."];
CanBo_delete3Tip=["",spacer+"This option allows each member of the group to delete any records in the 'Canbo' table."];

// CTV table
CTV_addTip=["",spacer+"This option allows all members of the group to add records to the 'CTV' table. A member who adds a record to the table becomes the 'owner' of that record."];

CTV_view0Tip=["",spacer+"This option prohibits all members of the group from viewing any record in the 'CTV' table."];
CTV_view1Tip=["",spacer+"This option allows each member of the group to view only his own records in the 'CTV' table."];
CTV_view2Tip=["",spacer+"This option allows each member of the group to view any record owned by any member of the group in the 'CTV' table."];
CTV_view3Tip=["",spacer+"This option allows each member of the group to view all records in the 'CTV' table."];

CTV_edit0Tip=["",spacer+"This option prohibits all members of the group from modifying any record in the 'CTV' table."];
CTV_edit1Tip=["",spacer+"This option allows each member of the group to edit only his own records in the 'CTV' table."];
CTV_edit2Tip=["",spacer+"This option allows each member of the group to edit any record owned by any member of the group in the 'CTV' table."];
CTV_edit3Tip=["",spacer+"This option allows each member of the group to edit any records in the 'CTV' table, regardless of their owner."];

CTV_delete0Tip=["",spacer+"This option prohibits all members of the group from deleting any record in the 'CTV' table."];
CTV_delete1Tip=["",spacer+"This option allows each member of the group to delete only his own records in the 'CTV' table."];
CTV_delete2Tip=["",spacer+"This option allows each member of the group to delete any record owned by any member of the group in the 'CTV' table."];
CTV_delete3Tip=["",spacer+"This option allows each member of the group to delete any records in the 'CTV' table."];

// LoaiCTV table
LoaiCTV_addTip=["",spacer+"This option allows all members of the group to add records to the 'LoaiCTV' table. A member who adds a record to the table becomes the 'owner' of that record."];

LoaiCTV_view0Tip=["",spacer+"This option prohibits all members of the group from viewing any record in the 'LoaiCTV' table."];
LoaiCTV_view1Tip=["",spacer+"This option allows each member of the group to view only his own records in the 'LoaiCTV' table."];
LoaiCTV_view2Tip=["",spacer+"This option allows each member of the group to view any record owned by any member of the group in the 'LoaiCTV' table."];
LoaiCTV_view3Tip=["",spacer+"This option allows each member of the group to view all records in the 'LoaiCTV' table."];

LoaiCTV_edit0Tip=["",spacer+"This option prohibits all members of the group from modifying any record in the 'LoaiCTV' table."];
LoaiCTV_edit1Tip=["",spacer+"This option allows each member of the group to edit only his own records in the 'LoaiCTV' table."];
LoaiCTV_edit2Tip=["",spacer+"This option allows each member of the group to edit any record owned by any member of the group in the 'LoaiCTV' table."];
LoaiCTV_edit3Tip=["",spacer+"This option allows each member of the group to edit any records in the 'LoaiCTV' table, regardless of their owner."];

LoaiCTV_delete0Tip=["",spacer+"This option prohibits all members of the group from deleting any record in the 'LoaiCTV' table."];
LoaiCTV_delete1Tip=["",spacer+"This option allows each member of the group to delete only his own records in the 'LoaiCTV' table."];
LoaiCTV_delete2Tip=["",spacer+"This option allows each member of the group to delete any record owned by any member of the group in the 'LoaiCTV' table."];
LoaiCTV_delete3Tip=["",spacer+"This option allows each member of the group to delete any records in the 'LoaiCTV' table."];

// BL3 table
BL3_addTip=["",spacer+"This option allows all members of the group to add records to the 'BL3' table. A member who adds a record to the table becomes the 'owner' of that record."];

BL3_view0Tip=["",spacer+"This option prohibits all members of the group from viewing any record in the 'BL3' table."];
BL3_view1Tip=["",spacer+"This option allows each member of the group to view only his own records in the 'BL3' table."];
BL3_view2Tip=["",spacer+"This option allows each member of the group to view any record owned by any member of the group in the 'BL3' table."];
BL3_view3Tip=["",spacer+"This option allows each member of the group to view all records in the 'BL3' table."];

BL3_edit0Tip=["",spacer+"This option prohibits all members of the group from modifying any record in the 'BL3' table."];
BL3_edit1Tip=["",spacer+"This option allows each member of the group to edit only his own records in the 'BL3' table."];
BL3_edit2Tip=["",spacer+"This option allows each member of the group to edit any record owned by any member of the group in the 'BL3' table."];
BL3_edit3Tip=["",spacer+"This option allows each member of the group to edit any records in the 'BL3' table, regardless of their owner."];

BL3_delete0Tip=["",spacer+"This option prohibits all members of the group from deleting any record in the 'BL3' table."];
BL3_delete1Tip=["",spacer+"This option allows each member of the group to delete only his own records in the 'BL3' table."];
BL3_delete2Tip=["",spacer+"This option allows each member of the group to delete any record owned by any member of the group in the 'BL3' table."];
BL3_delete3Tip=["",spacer+"This option allows each member of the group to delete any records in the 'BL3' table."];

// PhanLoai_CTV table
PhanLoai_CTV_addTip=["",spacer+"This option allows all members of the group to add records to the 'Phanloai CTV' table. A member who adds a record to the table becomes the 'owner' of that record."];

PhanLoai_CTV_view0Tip=["",spacer+"This option prohibits all members of the group from viewing any record in the 'Phanloai CTV' table."];
PhanLoai_CTV_view1Tip=["",spacer+"This option allows each member of the group to view only his own records in the 'Phanloai CTV' table."];
PhanLoai_CTV_view2Tip=["",spacer+"This option allows each member of the group to view any record owned by any member of the group in the 'Phanloai CTV' table."];
PhanLoai_CTV_view3Tip=["",spacer+"This option allows each member of the group to view all records in the 'Phanloai CTV' table."];

PhanLoai_CTV_edit0Tip=["",spacer+"This option prohibits all members of the group from modifying any record in the 'Phanloai CTV' table."];
PhanLoai_CTV_edit1Tip=["",spacer+"This option allows each member of the group to edit only his own records in the 'Phanloai CTV' table."];
PhanLoai_CTV_edit2Tip=["",spacer+"This option allows each member of the group to edit any record owned by any member of the group in the 'Phanloai CTV' table."];
PhanLoai_CTV_edit3Tip=["",spacer+"This option allows each member of the group to edit any records in the 'Phanloai CTV' table, regardless of their owner."];

PhanLoai_CTV_delete0Tip=["",spacer+"This option prohibits all members of the group from deleting any record in the 'Phanloai CTV' table."];
PhanLoai_CTV_delete1Tip=["",spacer+"This option allows each member of the group to delete only his own records in the 'Phanloai CTV' table."];
PhanLoai_CTV_delete2Tip=["",spacer+"This option allows each member of the group to delete any record owned by any member of the group in the 'Phanloai CTV' table."];
PhanLoai_CTV_delete3Tip=["",spacer+"This option allows each member of the group to delete any records in the 'Phanloai CTV' table."];

// BL2 table
BL2_addTip=["",spacer+"This option allows all members of the group to add records to the 'BL2' table. A member who adds a record to the table becomes the 'owner' of that record."];

BL2_view0Tip=["",spacer+"This option prohibits all members of the group from viewing any record in the 'BL2' table."];
BL2_view1Tip=["",spacer+"This option allows each member of the group to view only his own records in the 'BL2' table."];
BL2_view2Tip=["",spacer+"This option allows each member of the group to view any record owned by any member of the group in the 'BL2' table."];
BL2_view3Tip=["",spacer+"This option allows each member of the group to view all records in the 'BL2' table."];

BL2_edit0Tip=["",spacer+"This option prohibits all members of the group from modifying any record in the 'BL2' table."];
BL2_edit1Tip=["",spacer+"This option allows each member of the group to edit only his own records in the 'BL2' table."];
BL2_edit2Tip=["",spacer+"This option allows each member of the group to edit any record owned by any member of the group in the 'BL2' table."];
BL2_edit3Tip=["",spacer+"This option allows each member of the group to edit any records in the 'BL2' table, regardless of their owner."];

BL2_delete0Tip=["",spacer+"This option prohibits all members of the group from deleting any record in the 'BL2' table."];
BL2_delete1Tip=["",spacer+"This option allows each member of the group to delete only his own records in the 'BL2' table."];
BL2_delete2Tip=["",spacer+"This option allows each member of the group to delete any record owned by any member of the group in the 'BL2' table."];
BL2_delete3Tip=["",spacer+"This option allows each member of the group to delete any records in the 'BL2' table."];

// XulyTin table
XulyTin_addTip=["",spacer+"This option allows all members of the group to add records to the 'XulyTin' table. A member who adds a record to the table becomes the 'owner' of that record."];

XulyTin_view0Tip=["",spacer+"This option prohibits all members of the group from viewing any record in the 'XulyTin' table."];
XulyTin_view1Tip=["",spacer+"This option allows each member of the group to view only his own records in the 'XulyTin' table."];
XulyTin_view2Tip=["",spacer+"This option allows each member of the group to view any record owned by any member of the group in the 'XulyTin' table."];
XulyTin_view3Tip=["",spacer+"This option allows each member of the group to view all records in the 'XulyTin' table."];

XulyTin_edit0Tip=["",spacer+"This option prohibits all members of the group from modifying any record in the 'XulyTin' table."];
XulyTin_edit1Tip=["",spacer+"This option allows each member of the group to edit only his own records in the 'XulyTin' table."];
XulyTin_edit2Tip=["",spacer+"This option allows each member of the group to edit any record owned by any member of the group in the 'XulyTin' table."];
XulyTin_edit3Tip=["",spacer+"This option allows each member of the group to edit any records in the 'XulyTin' table, regardless of their owner."];

XulyTin_delete0Tip=["",spacer+"This option prohibits all members of the group from deleting any record in the 'XulyTin' table."];
XulyTin_delete1Tip=["",spacer+"This option allows each member of the group to delete only his own records in the 'XulyTin' table."];
XulyTin_delete2Tip=["",spacer+"This option allows each member of the group to delete any record owned by any member of the group in the 'XulyTin' table."];
XulyTin_delete3Tip=["",spacer+"This option allows each member of the group to delete any records in the 'XulyTin' table."];

// TinBao table
TinBao_addTip=["",spacer+"This option allows all members of the group to add records to the 'TinBao' table. A member who adds a record to the table becomes the 'owner' of that record."];

TinBao_view0Tip=["",spacer+"This option prohibits all members of the group from viewing any record in the 'TinBao' table."];
TinBao_view1Tip=["",spacer+"This option allows each member of the group to view only his own records in the 'TinBao' table."];
TinBao_view2Tip=["",spacer+"This option allows each member of the group to view any record owned by any member of the group in the 'TinBao' table."];
TinBao_view3Tip=["",spacer+"This option allows each member of the group to view all records in the 'TinBao' table."];

TinBao_edit0Tip=["",spacer+"This option prohibits all members of the group from modifying any record in the 'TinBao' table."];
TinBao_edit1Tip=["",spacer+"This option allows each member of the group to edit only his own records in the 'TinBao' table."];
TinBao_edit2Tip=["",spacer+"This option allows each member of the group to edit any record owned by any member of the group in the 'TinBao' table."];
TinBao_edit3Tip=["",spacer+"This option allows each member of the group to edit any records in the 'TinBao' table, regardless of their owner."];

TinBao_delete0Tip=["",spacer+"This option prohibits all members of the group from deleting any record in the 'TinBao' table."];
TinBao_delete1Tip=["",spacer+"This option allows each member of the group to delete only his own records in the 'TinBao' table."];
TinBao_delete2Tip=["",spacer+"This option allows each member of the group to delete any record owned by any member of the group in the 'TinBao' table."];
TinBao_delete3Tip=["",spacer+"This option allows each member of the group to delete any records in the 'TinBao' table."];

// Ketqua table
Ketqua_addTip=["",spacer+"This option allows all members of the group to add records to the 'Ketqua' table. A member who adds a record to the table becomes the 'owner' of that record."];

Ketqua_view0Tip=["",spacer+"This option prohibits all members of the group from viewing any record in the 'Ketqua' table."];
Ketqua_view1Tip=["",spacer+"This option allows each member of the group to view only his own records in the 'Ketqua' table."];
Ketqua_view2Tip=["",spacer+"This option allows each member of the group to view any record owned by any member of the group in the 'Ketqua' table."];
Ketqua_view3Tip=["",spacer+"This option allows each member of the group to view all records in the 'Ketqua' table."];

Ketqua_edit0Tip=["",spacer+"This option prohibits all members of the group from modifying any record in the 'Ketqua' table."];
Ketqua_edit1Tip=["",spacer+"This option allows each member of the group to edit only his own records in the 'Ketqua' table."];
Ketqua_edit2Tip=["",spacer+"This option allows each member of the group to edit any record owned by any member of the group in the 'Ketqua' table."];
Ketqua_edit3Tip=["",spacer+"This option allows each member of the group to edit any records in the 'Ketqua' table, regardless of their owner."];

Ketqua_delete0Tip=["",spacer+"This option prohibits all members of the group from deleting any record in the 'Ketqua' table."];
Ketqua_delete1Tip=["",spacer+"This option allows each member of the group to delete only his own records in the 'Ketqua' table."];
Ketqua_delete2Tip=["",spacer+"This option allows each member of the group to delete any record owned by any member of the group in the 'Ketqua' table."];
Ketqua_delete3Tip=["",spacer+"This option allows each member of the group to delete any records in the 'Ketqua' table."];

// STCN table
STCN_addTip=["",spacer+"This option allows all members of the group to add records to the 'STCN' table. A member who adds a record to the table becomes the 'owner' of that record."];

STCN_view0Tip=["",spacer+"This option prohibits all members of the group from viewing any record in the 'STCN' table."];
STCN_view1Tip=["",spacer+"This option allows each member of the group to view only his own records in the 'STCN' table."];
STCN_view2Tip=["",spacer+"This option allows each member of the group to view any record owned by any member of the group in the 'STCN' table."];
STCN_view3Tip=["",spacer+"This option allows each member of the group to view all records in the 'STCN' table."];

STCN_edit0Tip=["",spacer+"This option prohibits all members of the group from modifying any record in the 'STCN' table."];
STCN_edit1Tip=["",spacer+"This option allows each member of the group to edit only his own records in the 'STCN' table."];
STCN_edit2Tip=["",spacer+"This option allows each member of the group to edit any record owned by any member of the group in the 'STCN' table."];
STCN_edit3Tip=["",spacer+"This option allows each member of the group to edit any records in the 'STCN' table, regardless of their owner."];

STCN_delete0Tip=["",spacer+"This option prohibits all members of the group from deleting any record in the 'STCN' table."];
STCN_delete1Tip=["",spacer+"This option allows each member of the group to delete only his own records in the 'STCN' table."];
STCN_delete2Tip=["",spacer+"This option allows each member of the group to delete any record owned by any member of the group in the 'STCN' table."];
STCN_delete3Tip=["",spacer+"This option allows each member of the group to delete any records in the 'STCN' table."];

// STCNSTT table
STCNSTT_addTip=["",spacer+"This option allows all members of the group to add records to the 'STCNSTT' table. A member who adds a record to the table becomes the 'owner' of that record."];

STCNSTT_view0Tip=["",spacer+"This option prohibits all members of the group from viewing any record in the 'STCNSTT' table."];
STCNSTT_view1Tip=["",spacer+"This option allows each member of the group to view only his own records in the 'STCNSTT' table."];
STCNSTT_view2Tip=["",spacer+"This option allows each member of the group to view any record owned by any member of the group in the 'STCNSTT' table."];
STCNSTT_view3Tip=["",spacer+"This option allows each member of the group to view all records in the 'STCNSTT' table."];

STCNSTT_edit0Tip=["",spacer+"This option prohibits all members of the group from modifying any record in the 'STCNSTT' table."];
STCNSTT_edit1Tip=["",spacer+"This option allows each member of the group to edit only his own records in the 'STCNSTT' table."];
STCNSTT_edit2Tip=["",spacer+"This option allows each member of the group to edit any record owned by any member of the group in the 'STCNSTT' table."];
STCNSTT_edit3Tip=["",spacer+"This option allows each member of the group to edit any records in the 'STCNSTT' table, regardless of their owner."];

STCNSTT_delete0Tip=["",spacer+"This option prohibits all members of the group from deleting any record in the 'STCNSTT' table."];
STCNSTT_delete1Tip=["",spacer+"This option allows each member of the group to delete only his own records in the 'STCNSTT' table."];
STCNSTT_delete2Tip=["",spacer+"This option allows each member of the group to delete any record owned by any member of the group in the 'STCNSTT' table."];
STCNSTT_delete3Tip=["",spacer+"This option allows each member of the group to delete any records in the 'STCNSTT' table."];

// DOITUONG table
DOITUONG_addTip=["",spacer+"This option allows all members of the group to add records to the 'DOITUONG' table. A member who adds a record to the table becomes the 'owner' of that record."];

DOITUONG_view0Tip=["",spacer+"This option prohibits all members of the group from viewing any record in the 'DOITUONG' table."];
DOITUONG_view1Tip=["",spacer+"This option allows each member of the group to view only his own records in the 'DOITUONG' table."];
DOITUONG_view2Tip=["",spacer+"This option allows each member of the group to view any record owned by any member of the group in the 'DOITUONG' table."];
DOITUONG_view3Tip=["",spacer+"This option allows each member of the group to view all records in the 'DOITUONG' table."];

DOITUONG_edit0Tip=["",spacer+"This option prohibits all members of the group from modifying any record in the 'DOITUONG' table."];
DOITUONG_edit1Tip=["",spacer+"This option allows each member of the group to edit only his own records in the 'DOITUONG' table."];
DOITUONG_edit2Tip=["",spacer+"This option allows each member of the group to edit any record owned by any member of the group in the 'DOITUONG' table."];
DOITUONG_edit3Tip=["",spacer+"This option allows each member of the group to edit any records in the 'DOITUONG' table, regardless of their owner."];

DOITUONG_delete0Tip=["",spacer+"This option prohibits all members of the group from deleting any record in the 'DOITUONG' table."];
DOITUONG_delete1Tip=["",spacer+"This option allows each member of the group to delete only his own records in the 'DOITUONG' table."];
DOITUONG_delete2Tip=["",spacer+"This option allows each member of the group to delete any record owned by any member of the group in the 'DOITUONG' table."];
DOITUONG_delete3Tip=["",spacer+"This option allows each member of the group to delete any records in the 'DOITUONG' table."];

/*
	Style syntax:
	-------------
	[TitleColor,TextColor,TitleBgColor,TextBgColor,TitleBgImag,TextBgImag,TitleTextAlign,
	TextTextAlign,TitleFontFace,TextFontFace, TipPosition, StickyStyle, TitleFontSize,
	TextFontSize, Width, Height, BorderSize, PadTextArea, CoordinateX , CoordinateY,
	TransitionNumber, TransitionDuration, TransparencyLevel ,ShadowType, ShadowColor]

*/

toolTipStyle=["white","#00008B","#000099","#E6E6FA","","images/helpBg.gif","","","","\"Trebuchet MS\", sans-serif","","","","3",400,"",1,2,10,10,51,1,0,"",""];

applyCssFilter();
