/**
 * @license
 * PramukhIndic Javascript Library v4.0.1 -  http://www.vishalon.net/pramukhime/javascript-library
 * Copyright (c) 2005-2018 Vishal Monpara (http://www.vishalon.net)
 * 
 * License:
 * Please read license.html file for detailed license terms.
 * 
 * License Summary
 *   Personal and Commercial use - Allowed (Except noted below)
 *   Use in Software as a Service (SaaS), Distribution Application/Module/Add-on/Plugin, OEM- Not Allowed
 *   Modify source code or any file? - Not Allowed
 *   Hosting for sharing/distribution - Not Allowed
 */
function PramukhIndic(_) {
    "use strict";
    var a = {},
        n = {},
        e = {},
        i = {},
        M = " ",
        t = !1,
        r = new function() {
            this.M = [], this.s = [], this.m = function(_, a) {
                var n = {
                    h: _,
                    l: [],
                    k: [],
                    I: "",
                    g: 0,
                    A: -1
                };
                return n.l.push(this.v(_, a)), n
            }, this.v = function(_, a) {
                return {
                    h: _,
                    I: a,
                    g: 0,
                    L: 0,
                    p: 0,
                    R: !1,
                    N: 0,
                    C: 0,
                    A: -1,
                    S: {}
                }
            }, this.U = function() {
                if (!(this.M.length > 0 && this.M[0].h === String.fromCharCode(27))) {
                    var _, a = [];
                    for (a = [], _ = 0; _ < 8; _++) a.push(this.m(String.fromCharCode(27), ""));
                    this.M = a;
                    var n = this.s = [];
                    for (_ = 0; _ <= 7; _++) n.push(a[_].l[0]);
                    for (_ = 6; _ >= 0; _--) n[_].S = n[_ + 1]
                }
            }, this.D = function(_) {
                var a = this.v(_, ""),
                    n = this.s;
                a.S = n[0], n.unshift(a), this.M[0].l.unshift(a)
            }, this.T = function(_) {
                var a, n = this.M,
                    e = n[n.length - 1],
                    i = n[n.length - 2],
                    M = this.s;
                for (a = 0; a < e.k.length; a++) e.k[a].S = null;
                for (a = 0; a < e.l.length; a++) e.l[a].S = null;
                i.l.length > 0 && (i.l[0].S = null), i.k.length > 0 && (i.k[0].S = null), n.pop(), n.unshift(this.m(_, _)), M.pop(), M.unshift(n[0].l[0]), M[0].S = M[1]
            }, this.j = function() {
                var _, a, n = this.M,
                    e = n[0],
                    i = n[0].l,
                    M = "",
                    t = 0,
                    r = 0;
                for (_ = i.length - 1; _ >= 0; _--) a = i[_].g, 0 === (r = M.length) ? (t += a, M += i[_].I) : r >= a ? M = M.substring(0, r - a) + i[_].I : (M = "", t += a - r);
                e.g = t, e.I = M
            }, this.K = function(_) {
                var a, n = this.M;
                for (n[0].l = [], a = _; a > 0; a--) n[a].k = n[a].l, n[a].l = [];
                this.G()
            }, this.G = function() {
                var _, a, n, e, i = this.M,
                    M = i.length,
                    t = this.s;
                for (a = 0, n = t.length; a < n; a++) t[a].S = null;
                for (t = [], _ = 0; _ < M; _++)
                    for (n = (e = i[_].l).length, a = 0; a < n; a++) t.push(e[a]);
                for (_ = t.length; _ <= 8; _++) t.push(this.v(" ", ""));
                for (_ = 6; _ >= 0; _--) t[_].S = t[_ + 1];
                this.s = t
            }, this.H = function(_) {
                return this.s[_]
            }, this.V = function() {
                var _ = this.s;
                return [_[3].h + _[2].h + _[1].h + _[0].h, _[2].h + _[1].h + _[0].h, _[1].h + _[0].h, _[0].h]
            }, this.P = function() {
                var _ = this.M;
                return [_[3].h + _[2].h + _[1].h + _[0].h, _[2].h + _[1].h + _[0].h, _[1].h + _[0].h, _[0].h]
            }, this.F = function(_) {
                for (var a = this.s, n = _; n > 0; n--)
                    if (a[n].A === _) return !1;
                return !0
            }, this.J = function(_) {
                for (var a = this.M, n = _; n > 0; n--)
                    if (a[n].A === _) return !1;
                return !0
            }, this.B = function(_) {
                var a = this.s,
                    n = 0;
                _ > 0 && (n += a[_].I.length);
                for (var e = _ - 1; e > 0; e--) n = n - a[e].g + a[e].I.length;
                return n
            }, this.W = function() {
                var _ = this.M,
                    a = _[0],
                    n = _[1],
                    e = 0,
                    i = "";
                return 27 === a.h.charCodeAt(0) ? {
                    letterConsumed: !1,
                    removeCharacters: e,
                    unicodeText: i
                } : (a.S = null, n.k.length > 0 && (n.l = n.k, n.k = []), _.shift(), e = n.I.length - a.g + a.I.length, i = n.I, _.push(this.m(String.fromCharCode(27), "")), this.G(), {
                    letterConsumed: !0,
                    removeCharacters: e,
                    unicodeText: i
                })
            }
        };
    r.U();
    var o = function(_) {
            var a = _.charCodeAt(0);
            return a >= 55296 && a <= 56319
        },
        u = function(_, a, n) {
            return n || o(_.charAt(a)) ? 1024 * (_.charCodeAt(a) - 55296) + _.charCodeAt(a + 1) - 56320 + 65536 : _.charCodeAt(a)
        },
        s = function(_) {
            if (_ > 65535) {
                var a = Math.floor((_ - 65536) / 1024) + 55296,
                    n = (_ - 65536) % 1024 + 56320;
                return String.fromCharCode(a, n)
            }
            return String.fromCharCode(_)
        },
        m = function() {
            switch (P(2, 2, {
                E_: "ॆ",
                O_: "ॊ"
            }, !0, !0), P(4, 4, {
                a_: "ऄ",
                E_: "ऎ",
                O_: "ऒ"
            }, !0, !0), 8 === i.$ ? (E(6, 6, "k*#q#K,kh*#Q#Kh,g*#G,j*#z,D*,,ph*#f*#F,y*#Y".split(","), "क़", !1, !0), E(6, 6, "n*,,,,,,,,r*#R*".split(","), "ऩ", !1, !0)) : 3 !== i.$ && (E(6, 6, "k*#q#K,kh*#Q#Kh,g*#G,j*#J,D*,Dh*,ph*#f*#F,y*#Y".split(","), "क़", !1, !0), E(6, 6, "n*,,,,,,,,r*#R*,,,L*".split(","), "ऩ", !1, !0)), i.$) {
                case 8:
                    "panchamakshar" === i.__ ? (V("nk,ng".split(","), {
                        n_: 2,
                        i_: 1e3
                    }, {
                        n_: 2,
                        i_: 2
                    }, 2, [78, 71, 0]), V("nT,nD".split(","), {
                        n_: 2,
                        i_: 1e3
                    }, {
                        n_: 2,
                        i_: 2
                    }, 2, [78, 0]), V("nq,nK,nQ,nG".split(","), {
                        n_: 2,
                        i_: 1e3
                    }, {
                        n_: 2,
                        i_: 2
                    }, 2, [77, 1, 0]), V("nKh,nk*,ng*,nD*".split(","), {
                        n_: 2,
                        i_: 1e3
                    }, {
                        n_: 2,
                        i_: 2
                    }, 3, [77, 1, 0]), V("nkh*".split(","), {
                        n_: 2,
                        i_: 1e3
                    }, {
                        n_: 2,
                        i_: 2
                    }, 3, [77, 2, 1, 0])) : "anusvar" === i.__ && (V("nk,ng,nC,nj,nz,nT,nD,nt,nd,mp,mf,mb,nl,nS,ns".split(","), {
                        n_: 2,
                        i_: 1e3
                    }, {
                        n_: 2,
                        i_: 2
                    }, 2, [77, 0]), V("nch".split(","), {
                        n_: 2,
                        i_: 1e3
                    }, {
                        n_: 2,
                        i_: 2
                    }, 3, [77, 1, 0]));
                    break;
                case 10:
                    V("nk,ng,nC,nj,nz,nT,nD,nS,ns".split(","), {
                        n_: 2,
                        i_: 1e3
                    }, {
                        n_: 2,
                        i_: 2
                    }, 2, [77, 0]), V("nch".split(","), {
                        n_: 2,
                        i_: 1e3
                    }, {
                        n_: 2,
                        i_: 2
                    }, 3, [77, 1, 0]);
                    break;
                case 16:
                    V("nk,ng".split(","), {
                        n_: 2,
                        i_: 1e3
                    }, {
                        n_: 2,
                        i_: 2
                    }, 2, [78, 71, 0]), V("nC,nj,nz".split(","), {
                        n_: 2,
                        i_: 1e3
                    }, {
                        n_: 2,
                        i_: 2
                    }, 2, [78, 89, 0]), V("nch".split(","), {
                        n_: 2,
                        i_: 1e3
                    }, {
                        n_: 2,
                        i_: 2
                    }, 3, [78, 89, 1, 0]), V("nT,nD".split(","), {
                        n_: 2,
                        i_: 1e3
                    }, {
                        n_: 2,
                        i_: 2
                    }, 2, [78, 0]), V("mk,mg,mC,mj,mz,mT,mD,mt,md,my,mS,ms".split(","), {
                        n_: 2,
                        i_: 1e3
                    }, {
                        n_: 2,
                        i_: 2
                    }, 2, [77, 0]), V("mch".split(","), {
                        n_: 2,
                        i_: 1e3
                    }, {
                        n_: 2,
                        i_: 2
                    }, 3, [77, 1, 0]);
                    break;
                default:
                    var _ = !1,
                        a = !1;
                    19 === i.$ || 6 === i.$ && "panchamakshar" === i.__ ? _ = !0 : (6 === i.$ && "anusvar" === i.__ || 9 === i.$ || 13 === i.$) && (a = !0), !0 === _ ? (V("nk,ng".split(","), {
                        n_: 2,
                        i_: 1e3
                    }, {
                        n_: 2,
                        i_: 2
                    }, 2, [78, 71, 0]), V("nC,nj,nz".split(","), {
                        n_: 2,
                        i_: 1e3
                    }, {
                        n_: 2,
                        i_: 2
                    }, 2, [78, 89, 0]), V("nch".split(","), {
                        n_: 2,
                        i_: 1e3
                    }, {
                        n_: 2,
                        i_: 2
                    }, 3, [78, 89, 1, 0]), V("nT,nD".split(","), {
                        n_: 2,
                        i_: 1e3
                    }, {
                        n_: 2,
                        i_: 2
                    }, 2, [78, 0]), V("nl,nS,ns".split(","), {
                        n_: 2,
                        i_: 1e3
                    }, {
                        n_: 2,
                        i_: 2
                    }, 2, [77, 0]), V("nq,nQ,nG,nJ".split(","), {
                        n_: 2,
                        i_: 1e3
                    }, {
                        n_: 2,
                        i_: 2
                    }, 2, [77, 0]), V("nk*,ng*,nj*,nD*,mf*".split(","), {
                        n_: 2,
                        i_: 1e3
                    }, {
                        n_: 2,
                        i_: 2
                    }, 3, [77, 1, 0]), V("nkh*,nDh*,mph*".split(","), {
                        n_: 2,
                        i_: 1e3
                    }, {
                        n_: 2,
                        i_: 2
                    }, 3, [77, 2, 1, 0])) : !0 === a && (V("nk,ng,nC,nj,nz,nT,nD,nt,nd,mp,mf,mb,mv,nl,nS,ns".split(","), {
                        n_: 2,
                        i_: 1e3
                    }, {
                        n_: 2,
                        i_: 2
                    }, 2, [77, 0]), V("nq,nQ,nG,nJ".split(","), {
                        n_: 2,
                        i_: 1e3
                    }, {
                        n_: 2,
                        i_: 2
                    }, 2, [77, 0]), V("nch".split(","), {
                        n_: 2,
                        i_: 1e3
                    }, {
                        n_: 2,
                        i_: 2
                    }, 3, [77, 1, 0]))
            }
        },
        h = function() {
            c(), E(6, 6, "r,w#v".split(","), "ৰ", !1, !0)
        },
        c = function() {
            var _ = i.$;
            P(7, 7, {
                G_: "৻",
                "@-#@@": "@"
            }, !1, !0), P(8, 8, {
                "@": "৺",
                t_: "ৎ"
            }, !1, !0), P(9, 6, {
                "-z#Z": "্য"
            }, !1, !0), P(2, 2, {
                oU: "ৗ"
            }, !1, !0), P(1, 1, {
                "'": "ʼ"
            }, !1, !0), E(7, 7, "Rs-,T_,1_,2_,3_,4_,12_,A_".split(","), "৲", !1, !0), P(7, 7, {
                "'-": "'"
            }, !1, !0), E(6, 6, "R#D*,Rh#Dh*,,y#y*".split(","), "ড়", !1, !0), 2 === _ && (V("Gy".split(","), {
                n_: -1,
                i_: 0
            }, {
                n_: 0,
                i_: 0
            }, 0, []), V("y".split(","), {
                n_: 1,
                i_: 1
            }, {
                n_: 1,
                i_: 1
            }, 1, [122]), V("y".split(","), {
                n_: 1,
                i_: 1e3
            }, {
                n_: 2,
                i_: 1e3
            }, 1, [122]), V("y*".split(","), {
                n_: 1,
                i_: 1e3
            }, {
                n_: 0,
                i_: 1e3
            }, 2, [121]), V("x".split(","), {
                n_: 0,
                i_: 0
            }, {
                n_: 0,
                i_: 0
            }, 1, [101, 107, 115]), V("kx".split(","), {
                n_: 1,
                i_: 1e3
            }, {
                n_: 1,
                i_: 1e3
            }, 1, [83, 104]), V("nC,nj".split(","), {
                n_: 2,
                i_: 1e3
            }, {
                n_: 2,
                i_: 2
            }, 2, [78, 89, 0]), V("nch".split(","), {
                n_: 2,
                i_: 1e3
            }, {
                n_: 2,
                i_: 2
            }, 3, [78, 89, 1, 0])), 2 === _ || 1 === _ ? (V("nk".split(","), {
                n_: 2,
                i_: 1e3
            }, {
                n_: 2,
                i_: 2
            }, 2, [78, 71, 0]), V("ngo,nga,ngi,nge,ngu,ngO,ngH,ng:,ngh".split(","), {
                n_: 2,
                i_: 1e3
            }, {
                n_: 1,
                i_: 1
            }, 3, [78, 71, 1, 0])) : (V("ngo,nga,ngi,nge,ngu,ngO,ngH,ng:".split(","), {
                n_: 2,
                i_: 1e3
            }, {
                n_: 1,
                i_: 1e3
            }, 3, [77, 1, 0]), V("ngh".split(","), {
                n_: 2,
                i_: 1e3
            }, {
                n_: 1,
                i_: 1
            }, 3, [77, 1, 0]))
        },
        d = function() {
            c(), E(6, 6, "v#w".split(","), "ৱ", !1, !0)
        },
        x = function() {
            P(1, 1, {
                "'": "ʼ"
            }, !1, !0), P(7, 7, {
                "'-": "'"
            }, !1, !0), V("nga,ngA,ngi,nge,ngu,ngw".split(","), {
                n_: 2,
                i_: 1e3
            }, {
                n_: 1,
                i_: 1e3
            }, 3, [77, 1, 0])
        },
        l = function() {
            P(1, 1, {
                "'": "ʼ"
            }, !1, !0), P(7, 7, {
                "'-": "'"
            }, !1, !0), k()
        },
        f = function() {
            P(7, 7, {
                "Rs-": "૱"
            }, !1, !0), V("nk,ng,nC,nj,nz,nT,nD,nt,nd,mp,mf,mb,mv,nl,nS,ns".split(","), {
                n_: 2,
                i_: 1e3
            }, {
                n_: 2,
                i_: 2
            }, 2, [77, 0]), V("nch".split(","), {
                n_: 2,
                i_: 1e3
            }, {
                n_: 2,
                i_: 2
            }, 3, [77, 1, 0])
        },
        k = function() {
            P(7, 7, {
                "@": "॰",
                "@-#@@": "@"
            }, !1, !0), m()
        },
        I = function() {
            H(4, "E", "ಏ"), H(4, "e", "ಎ"), H(4, "O", "ಓ"), H(4, "o", "ಒ"), H(2, "E", "ೇ"), H(2, "e", "ೆ"), H(2, "O", "ೋ"), H(2, "o", "ೊ"), P(2, 2, {
                e_: "ೕ",
                aI: "ೖ"
            }, !1, !0), P(9, 6, {
                Y: "್ಯ್"
            }, !1, !0), V("m".split(","), {
                n_: 2,
                i_: 1e3
            }, {
                n_: 1,
                i_: 1
            }, 1, [77]), "panchamakshar" === i.__ ? (V("nk,ng".split(","), {
                n_: 2,
                i_: 1e3
            }, {
                n_: 2,
                i_: 2
            }, 2, [78, 71, 0]), V("nC,nj,nz".split(","), {
                n_: 2,
                i_: 1e3
            }, {
                n_: 2,
                i_: 2
            }, 2, [78, 89, 0]), V("nch".split(","), {
                n_: 2,
                i_: 1e3
            }, {
                n_: 2,
                i_: 2
            }, 3, [78, 89, 1, 0]), V("nT,nD".split(","), {
                n_: 2,
                i_: 1e3
            }, {
                n_: 2,
                i_: 2
            }, 2, [78, 0])) : "anusvar" === i.__ && (V("nk,ng,nC,nj,nz,nT,nD,nt,nd".split(","), {
                n_: 2,
                i_: 1e3
            }, {
                n_: 2,
                i_: 2
            }, 2, [77, 0]), V("nch".split(","), {
                n_: 2,
                i_: 1e3
            }, {
                n_: 2,
                i_: 2
            }, 3, [77, 1, 0])), V("mk,mg,mC,mj,mz,mT,mD,mN,mt,md,mn,mm,my,mY,mr,mR,ml,mv,ms,mS,mh,mL,mx,mG,ma,mA,mi,mu,me,mo,mE,mO".split(","), {
                n_: 2,
                i_: 1e3
            }, {
                n_: 1,
                i_: 2
            }, 2, [109, 0]), "panchamakshar" === i.__ && V("mp,mf,mb,mm".split(","), {
                n_: 2,
                i_: 1e3
            }, {
                n_: 1,
                i_: 1
            }, 2, [109, 0])
        },
        g = function() {
            P(2, 2, {
                oe: "ऺ",
                Oe: "ऻ",
                aU: "ॏ",
                ue: "ॖ",
                Ue: "ॗ"
            }, !1, !0), P(4, 4, {
                oe: "ॳ",
                Oe: "ॴ",
                aU: "ॵ",
                ue: "ॶ",
                Ue: "ॷ"
            }, !1, !0), P(1, 1, {
                "'": "ʼ"
            }, !1, !0), P(7, 7, {
                "'-": "'"
            }, !1, !0), m()
        },
        A = function() {
            L()
        },
        v = function() {
            l()
        },
        b = function() {
            E(7, 7, "1@,1*,1',1q,2q,3q,,,,dt".split(","), "൰", !1, !0), P(2, 2, {
                aU: "ൗ",
                "u-": "ു്"
            }, !1, !0), P(6, 6, {
                t: "റ്റ",
                "nR#n*R": "ന്‍റ"
            }, !1, !0), P(8, 8, {
                "N*": "ൺ",
                "n*": "ൻ",
                "r*": "ർ",
                "l*": "ൽ",
                "L*": "ൾ",
                "k*": "ൿ"
            }, !1, !0), V("n,N,r,l,L,m".split(","), {
                n_: 2,
                i_: 1e3
            }, {
                n_: 1,
                i_: 1
            }, 1, [0, 42]), V("na,ni,nu,nU,ne,no,nE,nO,nd,nn,nm,ny,nr,nv,Na,Ni,Nu,NU,Ne,No,NE,NO,NT,ND,NN,Nm,Ny,Nv,ma,mi,mu,mU,me,mo,mE,mO,mp,mm,my,mr,ml,ra,ri,ru,rU,re,ro,rE,rO,ry,la,li,lu,lU,le,lo,lE,lO,lp,lm,ly,lv,ll,La,Li,Lu,LU,Le,Lo,LE,LO,Ly,LL".split(","), {
                n_: 3,
                i_: 1e3
            }, {
                n_: 1,
                i_: 1
            }, 2, [1, 0]), V("ma,mi,me,mo,mE,mO,mp,mm,my,mr,ml".split(","), {
                n_: 2,
                i_: 1e3
            }, {
                n_: 1,
                i_: 1
            }, 2, [1, 0]), V("nth".split(","), {
                n_: 3,
                i_: 1e3
            }, {
                n_: 1,
                i_: 1
            }, 3, [2, 1, 0]), V("n-,N-,r-,l-,L-,m-".split(","), {
                n_: 0,
                i_: 1e3
            }, {
                n_: 0,
                i_: 0
            }, 2, [1, 0]), V("n*,N*,r*,l*,L*,m*".split(","), {
                n_: 0,
                i_: 1e3
            }, {
                n_: 0,
                i_: 0
            }, 1, []), V("-n,-N,-r,-l,-L,-m".split(","), {
                n_: -1,
                i_: 1e3
            }, {
                n_: 0,
                i_: 0
            }, 1, []), V("n_,N_,r_,l_,L_,m_".split(","), {
                n_: 0,
                i_: 1e3
            }, {
                n_: 0,
                i_: 0
            }, 1, []), V("rr".split(","), {
                n_: 3,
                i_: 1e3
            }, {
                n_: 1,
                i_: 1
            }, 2, [0, 1]), V("nk".split(","), {
                n_: 2,
                i_: 1e3
            }, {
                n_: 1,
                i_: 1
            }, 2, [110, 103, 0]), V("nC".split(","), {
                n_: 2,
                i_: 1e3
            }, {
                n_: 1,
                i_: 1
            }, 2, [110, 106, 0]), V("nch".split(","), {
                n_: 2,
                i_: 1e3
            }, {
                n_: 1,
                i_: 1
            }, 3, [110, 106, 1, 0])
        },
        L = function() {
            P(4, 4, {
                A_: "ॲ"
            }, !1, !0), k()
        },
        p = function() {
            H(7, "|", "𑙁"), H(7, "||", "𑙂"), P(7, 7, {
                "@": "𑙃",
                "@-#@@": "@"
            }, !1, !0), V("nk,ng,nC,nj,nz,nT,nD,nt,nd,mp,mf,mb,nl,nS,ns".split(","), {
                n_: 2,
                i_: 1e3
            }, {
                n_: 2,
                i_: 2
            }, 2, [77, 0]), V("nch".split(","), {
                n_: 2,
                i_: 1e3
            }, {
                n_: 2,
                i_: 2
            }, 3, [77, 1, 0])
        },
        R = function() {
            F(8, ".a".split(",")), H(7, "||", "꯫"), P(1, 1, {
                q: "꯬"
            }, !1, !0), E(8, 8, "K,L,M,P,N,T,Ng,I".split(","), "ꯛ", !1, !0), V("k".split(","), {
                n_: 2,
                i_: 1e3
            }, {
                n_: 1,
                i_: 1
            }, 1, [75]), V("l".split(","), {
                n_: 2,
                i_: 1e3
            }, {
                n_: 1,
                i_: 1
            }, 1, [76]), V("m".split(","), {
                n_: 2,
                i_: 1e3
            }, {
                n_: 1,
                i_: 1
            }, 1, [77]), V("p".split(","), {
                n_: 2,
                i_: 1e3
            }, {
                n_: 1,
                i_: 1
            }, 1, [80]), V("n".split(","), {
                n_: 2,
                i_: 1e3
            }, {
                n_: 1,
                i_: 1
            }, 1, [78]), V("t".split(","), {
                n_: 2,
                i_: 1e3
            }, {
                n_: 1,
                i_: 1
            }, 1, [84]), V("ng".split(","), {
                n_: 3,
                i_: 1e3
            }, {
                n_: 1,
                i_: 1
            }, 2, [78, 103]), V("ka,ke,ki,ko,ku,kh,la,le,li,lo,lu,ma,me,mi,mo,mu,pa,pe,pi,po,pu,ph,na,ne,ni,no,nu,ta,te,ti,to,tu,th".split(","), {
                n_: 3,
                i_: 1e3
            }, {
                n_: 1,
                i_: 1
            }, 2, [1, 0]), V("nga,nge,ngi,ngo,ngu".split(","), {
                n_: 3,
                i_: 1e3
            }, {
                n_: 1,
                i_: 1
            }, 3, [2, 1, 0]), V(".n".split(","), {
                n_: -1,
                i_: 1e3
            }, {
                n_: 0,
                i_: 0
            }, 0, [])
        },
        N = function() {
            P(7, 7, {
                "@": "॰",
                "@-#@@": "@"
            }, !1, !0), m()
        },
        C = function() {
            E(2, 2, "aI,aU".split(","), "ୖ", !1, !0), E(6, 6, "Y".split(","), "ୟ", !1, !0), P(7, 7, {
                "@": "୰",
                "@-#@@": "@"
            }, !1, !0), E(6, 6, "D*,Dh*".split(","), "ଡ଼", !1, !0), F(6, "w".split(",")), E(6, 6, "w".split(","), "ୱ", !1, !0)
        },
        S = function() {
            F(8, ".a".split(",")), E(7, 7, "@".split(","), "☬", !1, !0), E(7, 7, "q".split(","), "ੑ", !1, !0), E(8, 8, "ON".split(","), "ੴ", !1, !0), E(6, 6, "kh*#Kh,g*#G,z#Z#J#j*,R,,f#F#Ph#ph*".split(","), "ਖ਼", !1, !0), E(1, 1, "M,\\".split(","), "ੰ", !1, !0), P(7, 7, {
                "\\\\#\\-": "\\",
                "@-#@@": "@"
            }, !1, !0), P(9, 6, {
                Y: "ੵ"
            }, !1, !0), V("aank,aang,aanG,aanC,aanj,aanz,aanZ,aanT,aanD,aant,aand,aann,aamm,aamp,aamf,aamF,aamb,aamv,aanl,aanS,aans".split(","), {
                n_: 2,
                i_: 1e3
            }, {
                n_: 2,
                i_: 2
            }, 2, [46, 110, 0]), V("aanc,aanK,aamP".split(","), {
                n_: 2,
                i_: 1e3
            }, {
                n_: 1,
                i_: 1
            }, 2, [46, 110, 0]), V("Ank,Ang,AnG,AnC,Anj,Anz,AnZ,AnT,AnD,Ant,And,Ann,Amm,Amp,Amf,AmF,Amb,Amv,Anl,AnS,Ans".split(","), {
                n_: 2,
                i_: 1e3
            }, {
                n_: 2,
                i_: 2
            }, 2, [46, 110, 0]), V("Anc,AnK,AmP".split(","), {
                n_: 2,
                i_: 1e3
            }, {
                n_: 1,
                i_: 1
            }, 2, [46, 110, 0]), V("enk,eng,enG,enC,enj,enz,enZ,enT,enD,ent,end,enn,emm,emp,emf,emF,emb,emv,enl,enS,ens".split(","), {
                n_: 2,
                i_: 1e3
            }, {
                n_: 2,
                i_: 2
            }, 2, [46, 110, 0]), V("enc,enK,emP".split(","), {
                n_: 2,
                i_: 1e3
            }, {
                n_: 1,
                i_: 1
            }, 2, [46, 110, 0]), V("Ink,Ing,InG,InC,Inj,Inz,InZ,InT,InD,Int,Ind,Inn,Imm,Imp,Imf,ImF,Imb,Imv,Inl,InS,Ins".split(","), {
                n_: 2,
                i_: 1e3
            }, {
                n_: 2,
                i_: 2
            }, 2, [46, 110, 0]), V("Inc,InK,ImP".split(","), {
                n_: 2,
                i_: 1e3
            }, {
                n_: 1,
                i_: 1
            }, 2, [46, 110, 0]), V("aink,aing,ainG,ainC,ainj,ainz,ainZ,ainT,ainD,aint,aind,ainn,aimm,aimp,aimf,aimF,aimb,aimv,ainl,ainS,ains".split(","), {
                n_: 2,
                i_: 1e3
            }, {
                n_: 2,
                i_: 2
            }, 2, [46, 110, 0]), V("ainc,ainK,aimP".split(","), {
                n_: 2,
                i_: 1e3
            }, {
                n_: 1,
                i_: 1
            }, 2, [46, 110, 0]), V("onk,ong,onG,onC,onj,onz,onZ,onT,onD,ont,ond,onn,omm,omp,omf,omF,omb,omv,onl,onS,ons".split(","), {
                n_: 2,
                i_: 1e3
            }, {
                n_: 2,
                i_: 2
            }, 2, [46, 110, 0]), V("onc,onK,omP".split(","), {
                n_: 2,
                i_: 1e3
            }, {
                n_: 1,
                i_: 1
            }, 2, [46, 110, 0]), V("aunk,aung,aunG,aunC,aunj,aunz,aunZ,aunT,aunD,aunt,aund,aunn,aumm,aump,aumf,aumF,aumb,aumv,aunl,aunS,auns".split(","), {
                n_: 2,
                i_: 1e3
            }, {
                n_: 2,
                i_: 2
            }, 2, [46, 110, 0]), V("aunc,aunK,aumP".split(","), {
                n_: 2,
                i_: 1e3
            }, {
                n_: 1,
                i_: 1
            }, 2, [46, 110, 0]), V("aa.n,aa.m,ai.n,ai.m,au.n,au.m".split(","), {
                n_: -1,
                i_: 0
            }, {
                n_: 0,
                i_: 0
            }, 0, []), V("A.n,A.m,e.n,e.m,I.n,I.m,o.n,o.m".split(","), {
                n_: -1,
                i_: 0
            }, {
                n_: 0,
                i_: 0
            }, 0, []), V("ank,ang,anG,anC,anj,anz,anZ,anT,anD,ant,and,ann,amm,amp,amf,amF,amb,amv,anl,anS,ans".split(","), {
                n_: 2,
                i_: 1e3
            }, {
                n_: 2,
                i_: 2
            }, 2, [77, 0]), V("anc,anK,amP".split(","), {
                n_: 2,
                i_: 1e3
            }, {
                n_: 1,
                i_: 1
            }, 2, [77, 0]), V("ink,ing,inG,inC,inj,inz,inZ,inT,inD,int,ind,inn,imm,imp,imf,imF,imb,imv,inl,inS,ins".split(","), {
                n_: 2,
                i_: 1e3
            }, {
                n_: 2,
                i_: 2
            }, 2, [77, 0]), V("inc,inK,imP".split(","), {
                n_: 2,
                i_: 1e3
            }, {
                n_: 1,
                i_: 1
            }, 2, [77, 0]), V("unk,ung,unG,unC,unj,unz,unZ,unT,unD,unt,und,unn,umm,ump,umf,umF,umb,umv,unl,unS,uns".split(","), {
                n_: 2,
                i_: 1e3
            }, {
                n_: 2,
                i_: 2
            }, 2, [77, 0]), V("unc,unK,umP".split(","), {
                n_: 2,
                i_: 1e3
            }, {
                n_: 1,
                i_: 1
            }, 2, [77, 0]), V("oonk,oong,oonG,oonC,oonj,oonz,oonZ,oonT,oonD,oont,oond,oonn,oomm,oomp,oomf,oomF,oomb,oomv,oonl,oonS,oons".split(","), {
                n_: 2,
                i_: 1e3
            }, {
                n_: 2,
                i_: 2
            }, 2, [77, 0]), V("oonc,oonK,oomP".split(","), {
                n_: 2,
                i_: 1e3
            }, {
                n_: 1,
                i_: 1
            }, 2, [77, 0]), V("Unk,Ung,UnG,UnC,Unj,Unz,UnZ,UnT,UnD,Unt,Und,Unn,Umm,Ump,Umf,UmF,Umb,Umv,Unl,UnS,Uns".split(","), {
                n_: 2,
                i_: 1e3
            }, {
                n_: 2,
                i_: 2
            }, 2, [77, 0]), V("Unc,UnK,UmP".split(","), {
                n_: 2,
                i_: 1e3
            }, {
                n_: 1,
                i_: 1
            }, 2, [77, 0]), V("a.n,a.m,i.n,i.m,U.n,U.m".split(","), {
                n_: 1,
                i_: 1e3
            }, {
                n_: 1,
                i_: 1e3
            }, 2, [77]), V("oo.n,oo.m".split(","), {
                n_: 1,
                i_: 1e3
            }, {
                n_: 1,
                i_: 1e3
            }, 2, [77]), V("kk,gg,jj,TT,DD,tt,dd,pp,RR,ll,ss".split(","), {
                n_: 2,
                i_: 1e3
            }, {
                n_: 2,
                i_: 2
            }, 2, [92, 0]), V("khk,ghg,jhj,ThT,DhD,tht,dhd,php".split(","), {
                n_: 2,
                i_: 1e3
            }, {
                n_: 2,
                i_: 2
            }, 3, [92, 0]), V("cch,chc".split(","), {
                n_: 2,
                i_: 1e3
            }, {
                n_: 1,
                i_: 1
            }, 3, [92, 0])
        },
        U = function() {
            m()
        },
        D = function() {
            H(7, "|", "᱾"), H(7, "||", "᱿"), F(8, ".a".split(",")), F(2, "--,---".split(",")), P(7, 7, {
                ".": "ᱹ",
                "M.#:": "ᱺ",
                "~": "ᱻ",
                _: "ᱼ",
                z: "ᱽ",
                ".-": ".",
                ":-": ":",
                "~-#~~": "~",
                "_-": "_"
            }, !1, !0)
        },
        T = function() {
            P(7, 7, {
                "@": "॰",
                "@-#@@": "@"
            }, !1, !0), E(6, 6, "g_,j_,,D_,b_".split(","), "ॻ", !1, !0), m()
        },
        j = function() {},
        O = function() {
            V("Gn".split(","), {
                n_: -1,
                i_: 0
            }, {
                n_: 0,
                i_: 0
            }, 0, [0]), V("n".split(","), {
                n_: 2,
                i_: 1e3
            }, {
                n_: 1,
                i_: 1
            }, 1, [110, 72]), V("nh,nH".split(","), {
                n_: 2,
                i_: 1e3
            }, {
                n_: 2,
                i_: 2
            }, 2, [1, 0]), V("nk,ng".split(","), {
                n_: 2,
                i_: 1e3
            }, {
                n_: 2,
                i_: 2
            }, 2, [78, 71, 0]), V("ngh".split(","), {
                n_: 2,
                i_: 1e3
            }, {
                n_: 2,
                i_: 2
            }, 3, [110, 72, 107]), V("nj".split(","), {
                n_: 2,
                i_: 1e3
            }, {
                n_: 2,
                i_: 2
            }, 2, [78, 89, 99, 104]), V("nch".split(","), {
                n_: 2,
                i_: 1e3
            }, {
                n_: 2,
                i_: 2
            }, 3, [78, 89, 1, 0]), V("nt,nd".split(","), {
                n_: 2,
                i_: 1e3
            }, {
                n_: 2,
                i_: 2
            }, 2, [78, 0]), V("nth,ndh".split(","), {
                n_: 2,
                i_: 1e3
            }, {
                n_: 2,
                i_: 2
            }, 3, [110, 1, 0]), V("ndr".split(","), {
                n_: 2,
                i_: 1e3
            }, {
                n_: 3,
                i_: 3
            }, 3, [110, 72, 82]), V("tr".split(","), {
                n_: 2,
                i_: 1e3
            }, {
                n_: 1,
                i_: 1e3
            }, 2, [82, 82]), V("sa,sA,si,se,sI,so,sU".split(","), {
                n_: 1,
                i_: 1e3
            }, {
                n_: 1,
                i_: 1e3
            }, 2, [99, 104, 0]), V("oi,aai,ei,oai".split(","), {
                n_: 2,
                i_: 1e3
            }, {
                n_: 1,
                i_: 1e3
            }, 1, [121]), V("eo".split(","), {
                n_: 2,
                i_: 1e3
            }, {
                n_: 1,
                i_: 1e3
            }, 2, [105, 121, 79]), E(7, 7, "Dy,Mo,Yr,Db,Cr,Ab,Rs-,No".split(","), "௳", !1, !0)
        },
        y = function() {
            P(6, 6, {
                c_: "ౘ",
                z_: "ౙ",
                R_: "ౚ"
            }, !1, !0), E(7, 7, "0_,1_,2_,3_,1@,2@,3@,@".split(","), "౸", !1, !0), P(7, 7, {
                "@-#@@": "@"
            }, !1, !0), V("m".split(","), {
                n_: 2,
                i_: 1e3
            }, {
                n_: 1,
                i_: 1
            }, 1, [77]), V("nk,ng,nC,nj,nz,nT,nD,nt,nd,nl,nS,ns,mp,mf,mb,mv".split(","), {
                n_: 2,
                i_: 1e3
            }, {
                n_: 2,
                i_: 2
            }, 2, [77, 0]), V("nch".split(","), {
                n_: 2,
                i_: 1e3
            }, {
                n_: 2,
                i_: 2
            }, 3, [77, 1, 0]), V("mk,mg,mN,mC,mj,mz,mT,mD,mN,mt,md,mn,mm,my,mr,ml,ms,mS,mh,mL,mx,ma,mi,mu,me,mo,mE,mO".split(","), {
                n_: 2,
                i_: 1e3
            }, {
                n_: 1,
                i_: 2
            }, 2, [109, 0])
        },
        K = function() {
            var _, e = a,
                i = n;
            for (_ in e) delete e[_];
            for (_ in i) delete i[_]
        },
        w = function() {
            var _ = i.$;
            switch (K(), _) {
                case 14:
                    M = "𑘿";
                    break;
                case 15:
                    M = "꯭";
                    break;
                case 22:
                case 20:
                    M = "";
                    break;
                default:
                    M = "्"
            }
            switch (P(8, 8, {
                ".a": "ऽ"
            }, !0, !0), _) {
                case 5:
                    P(8, 8, {
                        OM: "ॐ"
                    }, !0, !0);
                    break;
                case 23:
                    P(8, 8, {
                        OM: "ௐ"
                    }, !1, !0);
                    break;
                default:
                    P(8, 8, {
                        OM: "ॐ"
                    }, !1, !0)
            }
            switch (_) {
                case 22:
                    break;
                case 1:
                case 2:
                case 12:
                    E(1, 1, "M-#.n#.m,ng#M,:#H".split(","), "ँ", !0, !0);
                    break;
                case 3:
                    E(1, 1, "ng#M".split(","), "ं", !0, !0);
                    break;
                case 8:
                    E(1, 1, "M-,M#.n#.m".split(","), "ँ", !0, !0);
                    break;
                case 4:
                    E(1, 1, "M#.n#.m".split(","), "ं", !0, !0);
                    break;
                case 6:
                    E(1, 1, "M-#.n#.m,M,:#H".split(","), "ँ", !0, !0);
                    break;
                case 7:
                    E(1, 1, "M#.n#.m,:#H".split(","), "ं", !0, !0);
                    break;
                case 11:
                    E(1, 1, "M#m*#.n#.m,:#H".split(","), "ं", !0, !0);
                    break;
                case 14:
                    E(1, 1, "M#.n#.m,:#H".split(","), "𑘽", !1, !0);
                    break;
                case 15:
                    E(1, 1, ".n".split(","), "ꯪ", !1, !0);
                    break;
                case 18:
                    E(1, 1, ".n#.m,:#H".split(","), "ं", !0, !0);
                    break;
                case 20:
                    E(1, 1, "M".split(","), "ᱸ", !1, !0);
                    break;
                case 23:
                    E(1, 1, "M#.n#.m,:".split(","), "ं", !0, !0);
                    break;
                default:
                    E(1, 1, "M-,M#.n#.m,:#H".split(","), "ँ", !0, !0)
            }
            switch (_) {
                case 1:
                case 2:
                case 12:
                    E(2, 2, "a#A,i,ee#I,u,oo#U,Ri,RI,,,e#e_,oi,,,O#O-,ou#au".split(","), "ा", !0, !0), E(2, 2, "Li-,LI-".split(","), "ॢ", !0, !0);
                    break;
                case 5:
                    E(2, 2, "aa#A,i,ee#I,u,oo#U,Ru#Ri,RU#RI,E,,e#e-,ai,O#O-,,o#o-,au#ou".split(","), "ा", !0, !0), E(2, 2, "Lu-#Li-,LU-#LI-".split(","), "ॢ", !0, !0);
                    break;
                case 3:
                    E(2, 2, "a#a-#A,i,,u,,,,,,e,wi#ai,,,w#w-,wo#ou".split(","), "ा", !0, !0);
                    break;
                case 8:
                    E(2, 2, "aa#A,i,ee#I,u#u-,oo#U#U-,Ri,RI,E,,e#e-,ai,O#O-,,o#o-,au#ou".split(","), "ा", !0, !0), E(2, 2, "Li-,LI-".split(","), "ॢ", !0, !0);
                    break;
                case 11:
                    E(2, 2, "aa#A,i,ee#I,u,oo#U,Ri,RI,,e#e-,E,ai,,o#o-,O#O-,au#ou".split(","), "ा", !0, !0), E(2, 2, "Li-#L*i-,LI-#L*I-".split(","), "ॢ", !0, !0);
                    break;
                case 14:
                    E(2, 2, "aa#A,i,ee#I,u,oo#U,Ri,RI,Li-,LI-,e#e-,ai,o#o-,au#ou".split(","), "𑘰", !1, !0), P(2, 2, {
                        E: "𑙀",
                        O: "𑘰𑙀"
                    }, !1, !0);
                    break;
                case 15:
                    E(2, 2, "o#o-,i#ee,aa#A,e#e-,ou,u#oo,ei".split(","), "ꯣ", !1, !0);
                    break;
                case 17:
                    E(2, 2, "aa#A,i,ee#I,u,oo#U,Ri,RI,,,e#e-,ai,,,o#o-,au#ou".split(","), "ा", !0, !0), E(2, 2, "Li-,LI-".split(","), "ॢ", !0, !0);
                    break;
                case 18:
                    E(2, 2, "aa#A,i,ee#I,u,oo#U,,,,,e#e-,ai,,,o#o-,au#ou".split(","), "ा", !0, !0);
                    break;
                case 20:
                    P(2, 2, {
                        a: "ᱟ",
                        i: "ᱤ",
                        u: "ᱩ",
                        e: "ᱮ",
                        O: "ᱳ"
                    }, !1, !0);
                    break;
                case 22:
                    E(2, 2, "a,E,i,u,o,e".split(","), "𑃢", !1, !1);
                    break;
                case 23:
                    E(2, 2, "aa#A,i,ee#I#ii,u,oo#U#uu,,,,e#e-,E#ae,ai,,o#o-,O#oa,au#ou#ow".split(","), "ा", !0, !0), E(2, 2, "aU".split(","), "ௗ", !1, !0);
                    break;
                case 24:
                    E(2, 2, "aa#A,i,ee#I,u,oo#U,Ri,RI,,e#e-,E,ai,,o#o-,O#O-,au#ou".split(","), "ा", !0, !0), E(2, 2, "Li-,LI-".split(","), "ॢ", !0, !0), E(2, 2, "e_,aI".split(","), "ౕ", !1, !0);
                    break;
                default:
                    E(2, 2, "aa#A,i,ee#I,u,oo#U,Ri,RI,E,,e#e-,ai,O#O-,,o#o-,au#ou".split(","), "ा", !0, !0), E(2, 2, "Li-,LI-".split(","), "ॢ", !0, !0)
            }
            switch (P(2, 2, {
                "-": M,
                "---": M + "‌",
                "--": M + "‍"
            }, !0, !0), _) {
                case 22:
                    break;
                case 1:
                case 2:
                case 12:
                case 3:
                    P(2, 2, {
                        "o#o-": ""
                    }, !1, !1);
                    break;
                case 20:
                    P(2, 2, {
                        o: "ᱚ"
                    }, !1, !0);
                    break;
                default:
                    P(2, 2, {
                        "a#a-": ""
                    }, !1, !1)
            }
            switch (_) {
                case 1:
                case 2:
                case 12:
                    E(4, 4, "o#o-,a#A,i,ee#I,u,oo#U,Ri,Li-,,,e#e-,oi,,,O#O-,ou#au".split(","), "अ", !0, !0), E(4, 4, "RI,LI-".split(","), "ॠ", !0, !0);
                    break;
                case 5:
                    E(4, 4, "a#a-,aa#A,i,ee#I,u,oo#U,Ru#Ri,Lu-#Li-,E,,e#e-,ai,O#O-,,o#o-,au#ou".split(","), "अ", !0, !0), E(4, 4, "RU#RI,LU-#LI-".split(","), "ॠ", !0, !0);
                    break;
                case 3:
                    E(4, 4, "o#o-,a#a-#A,i,,u,,,,,,e,wi#ai,,,w#w-,wo#ou".split(","), "अ", !0, !0), E(4, 4, "I#y,,,,,,O".split(","), "य", !0, !0), P(4, 4, {
                        "Ia#ya": "या",
                        Oa: "वा"
                    }, !1, !0);
                    break;
                case 8:
                    E(4, 4, "a#a-,aa#A,i,ee#I,u#u-,oo#U#U-,Ri,Li-,E,,e#e-,ai,O#O-,,o#o-,au#ou".split(","), "अ", !0, !0), E(4, 4, "RI,LI-".split(","), "ॠ", !0, !0);
                    break;
                case 11:
                    E(4, 4, "a#a-,aa#A,i,ee#I,u,oo#U,Ri,Li-#L*i-,,e#e-,E,ai,,o#o-,O#O-,au#ou".split(","), "अ", !0, !0), E(4, 4, "RI,LI-#L*I-".split(","), "ॠ", !0, !0);
                    break;
                case 14:
                    E(4, 4, "a#a-,aa#A,i,ee#I,u,oo#U,Ri,RI,Li-,LI-,e#e-,ai,o#o-,au#ou".split(","), "𑘀", !1, !0), P(4, 4, {
                        E: "𑘀𑙀",
                        O: "𑘁𑙀"
                    }, !1, !0);
                    break;
                case 15:
                    E(4, 4, "u,i,,a".split(","), "ꯎ", !1, !0), P(4, 4, {
                        "aa#A": "ꯑꯥ",
                        ee: "ꯑꯤ",
                        oo: "ꯑꯨ",
                        "e#e-": "ꯑꯦ",
                        ei: "ꯑꯩ",
                        o: "ꯑꯣ",
                        ou: "ꯑꯧ"
                    }, !1, !0);
                    break;
                case 17:
                    E(4, 4, "a#a-,aa#A,i,ee#I,u,oo#U,Ri,Li-,,,e#e-,ai,,,o#o-,au#ou".split(","), "अ", !0, !0), E(4, 4, "RI,LI-".split(","), "ॠ", !0, !0);
                    break;
                case 18:
                    E(4, 4, "a#a-,aa#A,i,ee#I,u,oo#U,,,,,e#e-,ai,,,o#o-,au#ou".split(","), "अ", !0, !0);
                    break;
                case 20:
                    P(4, 4, {
                        o: "ᱚ",
                        a: "ᱟ",
                        i: "ᱤ",
                        u: "ᱩ",
                        e: "ᱮ",
                        O: "ᱳ"
                    }, !1, !1);
                    break;
                case 22:
                    break;
                case 23:
                    E(4, 4, "a#a-,aa#A,i,ee#I#ii,u,oo#U#uu,,,,e#e-,E#ae,ai,,o#o-,O#oa,au#ou#ow".split(","), "अ", !0, !0);
                    break;
                case 24:
                    E(4, 4, "a#a-,aa#A,i,ee#I,u,oo#U,Ri,Li-,,e#e-,E,ai,,o#o-,O#O-,au#ou".split(","), "अ", !0, !0), E(4, 4, "RI,LI-".split(","), "ॠ", !0, !0);
                    break;
                default:
                    E(4, 4, "a#a-,aa#A,i,ee#I,u,oo#U,Ri,Li-,E,,e#e-,ai,O#O-,,o#o-,au#ou".split(","), "अ", !0, !0), E(4, 4, "RI,LI-".split(","), "ॠ", !0, !0)
            }
            switch (_) {
                case 3:
                case 7:
                case 11:
                case 14:
                case 15:
                case 20:
                case 22:
                case 23:
                case 24:
                    break;
                default:
                    P(5, 6, {
                        "*": "़"
                    }, !0, !0), P(7, 7, {
                        "*-#**": "*"
                    }, !1, !0)
            }
            switch (_) {
                case 1:
                    E(6, 6, "k,kh,g,gh,NG,s,sh,j,jh,NY,T,Th,D,Dh,N,t,th,d,dh,n,,p,ph#f,b,bh#vh,m,z,,,l,,,,xh#X,Xh,x,h".split(","), "क", !0, !0);
                    break;
                case 12:
                    E(6, 6, "k,kh,g,gh,NG,ch#C,chh#Ch,j,jh,NY,T,Th,D,Dh,N,t,th,d,dh,n,,p,ph#f,b,bh,m,z,r,,l,,,,sh#S,Sh,s,h".split(","), "क", !0, !0);
                    break;
                case 2:
                    E(6, 6, "k,kh,g,gh,NG,ch#C,chh#Ch,j,jh,NY,T,Th,D,Dh,N,t,th,d,dh,n,,p,ph#f,b#w,bh#v,m,z,r,,l,,,,sh#S,Sh,s,h".split(","), "क", !0, !0);
                    break;
                case 3:
                    E(6, 6, ",k#kh,g,,NG,,,j,,,,,,,,,t#th,d,dh,n,,,p#ph#f,b,,m,,r,,l,,,,,,s,h".split(","), "क", !0, !0);
                    break;
                case 8:
                    E(6, 6, "k,kh,g,,NG,ch#C,chh#Ch,j,,NY,T,Th,D,,N,t,th,d,,n,,p,ph#f,b,,m,y,r#R,,l,,,v#w,sh#S,Sh,s,h".split(","), "क", !0, !0);
                    break;
                case 11:
                    E(6, 6, "k,kh,g,gh,ng#n*g,ch#C,chh#Ch,j,jh#z,nj#n*j,T,Th,D,Dh,N,th,thh,d,dh,n,,p,ph#f,b,bh,m,y,r#R,rr,l,L,zh,v#w,S,sh,s,h".split(","), "क", !0, !0);
                    break;
                case 14:
                    E(6, 6, "k,kh,g,gh,NG,ch#C,chh#Ch,j,jh#z,NY,T,Th,D,Dh,N,t,th,d,dh,n,p,ph#f,b,bh,m,y,r#R,l,v#w,sh#S,Sh,s,h,L".split(","), "𑘎", !1, !0);
                    break;
                case 15:
                    E(6, 6, "k,s,l,m,p,n,ch#c,t,kh,ng,th,w#v,y,h,,,ph,,g,jh,r,b,j,d,gh,dh,bh".split(","), "ꯀ", !1, !0);
                    break;
                case 18:
                    E(6, 6, "k,kh,g,gh,NG,ch#C,chh#Ch,j,jh,NY,T,Th,D,Dh,N,t,th,d,dh,n,,p,ph,b,bh,m,y,r,,l,L#l*,,v#w,sh#S#s*,,s,h".split(","), "क", !0, !0);
                    break;
                case 20:
                    E(6, 6, "t,g#k',Ng,l,,k,j#c',m,w,,s,h,Ny,r,,ch,d#t',N,y,,p,D,n,R,,T,b#p',v,H".split(","), "ᱛ", !1, !0);
                    break;
                case 22:
                    E(6, 6, "s,t,b,ch,d,g,m,Ng,l,n,v,p,y,r,h,k,j,Ny,a,E,i,u,o,e,x".split(","), "𑃐", !1, !0);
                    break;
                case 23:
                    E(6, 6, "k#kh#g#gh#c#K#C#G,,,,NG,ch,,j,,NY#Gn#gn,t#d#T#D,,,,N,th#dh#Th#Dh,,,,n#nh,nH,p#b,,,,m,y,r,R,l,L,z#zh,v#w,Sh,sh,S#s,h#H".split(","), "क", !0, !0), P(6, 6, {
                        "ph#f": "ஃப",
                        X: "ஃஸ",
                        Z: "ஃஜ"
                    }, !1, !0);
                    break;
                case 24:
                    E(6, 6, "k,kh,g,gh,NG,ch#C,chh#Ch,j,jh#z,NY,T,Th,D,Dh,N,t,th,d,dh,n,,p,ph#f,b,bh,m,y,r,R,l,L,L_,v#w,sh#S,Sh,s,h".split(","), "क", !0, !0);
                    break;
                default:
                    E(6, 6, "k,kh,g,gh,NG,ch#C,chh#Ch,j,jh#z,NY,T,Th,D,Dh,N,t,th,d,dh,n,,p,ph#f,b,bh,m,y,r#R,,l,L,,v#w,sh#S,Sh,s,h".split(","), "क", !0, !0)
            }
            switch (_) {
                case 1:
                    P(6, 6, {
                        Gy: "ज्ञ"
                    }, !0, !0), P(6, 6, {
                        khy: "क्ष"
                    }, !0, !0);
                    break;
                case 2:
                case 12:
                    P(6, 6, {
                        Gy: "ज्ञ"
                    }, !0, !0), P(6, 6, {
                        kkh: "क्ष"
                    }, !0, !0);
                    break;
                case 3:
                case 15:
                case 18:
                case 20:
                case 22:
                    break;
                case 23:
                    P(6, 6, {
                        x: "क्ष"
                    }, !0, !1);
                    break;
                case 5:
                    P(6, 6, {
                        "Gn#Gy": "ज्ञ"
                    }, !0, !0), P(6, 6, {
                        x: "क्ष"
                    }, !0, !1);
                    break;
                case 14:
                    P(6, 6, {
                        Gy: "𑘕𑘿𑘗"
                    }, !0, !0), P(6, 6, {
                        x: "𑘎𑘿𑘬"
                    }, !0, !1);
                    break;
                default:
                    P(6, 6, {
                        Gy: "ज्ञ"
                    }, !0, !0), P(6, 6, {
                        x: "क्ष"
                    }, !0, !1)
            }
            switch (P(7, 7, {
                "|": "।",
                "||": "॥",
                Rs: "₹",
                "+-": "卐",
                "|-": "|",
                "-_": "-"
            }, !1, !0), _) {
                case 3:
                case 4:
                case 8:
                case 15:
                case 20:
                case 22:
                    break;
                default:
                    P(7, 7, {
                        ":-#::": ":"
                    }, !1, !0)
            }
            if (t) {
                switch (_) {
                    case 14:
                        E(7, 7, "0-,1-,2-,3-,4-,5-,6-,7-,8-,9-".split(","), "𑙐", !1, !0);
                        break;
                    case 15:
                        E(7, 7, "0-,1-,2-,3-,4-,5-,6-,7-,8-,9-".split(","), "꯰", !0, !0);
                        break;
                    case 20:
                        E(7, 7, "0-,1-,2-,3-,4-,5-,6-,7-,8-,9-".split(","), "᱐", !0, !0);
                        break;
                    case 22:
                        E(7, 7, "0-,1-,2-,3-,4-,5-,6-,7-,8-,9-".split(","), "𑃰", !1, !0);
                        break;
                    default:
                        E(7, 7, "0-,1-,2-,3-,4-,5-,6-,7-,8-,9-".split(","), "०", !0, !0)
                }
                E(7, 7, "0,1,2,3,4,5,6,7,8,9".split(","), "0", !0, !0)
            } else {
                switch (_) {
                    case 14:
                        E(7, 7, "0,1,2,3,4,5,6,7,8,9".split(","), "𑙐", !1, !0);
                        break;
                    case 15:
                        E(7, 7, "0,1,2,3,4,5,6,7,8,9".split(","), "꯰", !0, !0);
                        break;
                    case 20:
                        E(7, 7, "0,1,2,3,4,5,6,7,8,9".split(","), "᱐", !1, !0);
                        break;
                    case 22:
                        E(7, 7, "0,1,2,3,4,5,6,7,8,9".split(","), "𑃰", !1, !0);
                        break;
                    case 23:
                        E(7, 7, "1@,1*,1'".split(","), "௰", !1, !0);
                    default:
                        E(7, 7, "0,1,2,3,4,5,6,7,8,9".split(","), "०", !0, !0)
                }
                E(7, 7, "0-,1-,2-,3-,4-,5-,6-,7-,8-,9-".split(","), "0", !0, !0)
            }
        },
        G = function() {
            var _ = i.M_;
            if (!(_ <= 0)) {
                var n, e, t, r, o = 0,
                    u = a;
                for (e in u)
                    for (n = (t = u[e]).length, o = 0; o < n; o++)(r = t[o]).r_ && (r.o_ = z(r.o_));
                M = String.fromCharCode(M.charCodeAt(0) + _)
            }
        },
        z = function(_) {
            var a = i.M_,
                n = _.length,
                e = 0,
                M = 0,
                t = "";
            for (e = 0; e < n; e++) t += (M = _.charCodeAt(e)) >= 2304 && M <= 2431 ? String.fromCharCode(M + a) : String.fromCharCode(M);
            return t
        },
        H = function(_, n, e) {
            var i, M, t = a,
                r = 0;
            for (i = (M = t[n]).length, r = 0; r < i; r++)
                if (M[r].p === _) return void(M[r].o_ = e)
        },
        E = function(_, n, e, i, M, t) {
            var r, o, m, h = u(i, 0),
                c = 0,
                d = e.length,
                x = s,
                l = 0,
                f = a;
            for (c = 0; c < d; c++) {
                if ("" !== e[c])
                    for (r = e[c].split("#"), l = 0; l < r.length; l++)(m = f[o = r[l]] || []).push({
                        o_: x(h),
                        L: _,
                        p: n,
                        r_: M,
                        u_: 0 === l && t
                    }), f[o] = m;
                h++
            }
        },
        V = function(_, a, e, i, M) {
            var t, r, o, u = n,
                s = _.length;
            for (t = 0; t < s; t++)(o = u[r = _[t]] || []).push({
                s_: a,
                m_: e,
                h_: i,
                d_: M
            }), u[r] = o
        },
        P = function(_, n, e, i, M) {
            var t, r, o, u, s, m = a;
            for (t in e)
                for (r = t.split("#"), s = 0; s < r.length; s++)(u = m[o = r[s]] || []).push({
                    o_: e[t],
                    L: _,
                    p: n,
                    r_: i,
                    u_: 0 === s && M
                }), m[o] = u
        },
        F = function(_, n) {
            var e, i, M, t, r, o = n.length,
                u = a,
                s = -1;
            for (e = 0; e < o; e++) {
                for (s = -1, t = (i = u[r = n[e]]).length, M = 0; M < t; M++)
                    if (i[M].L === _) {
                        s = M;
                        break
                    }
                i.splice(s, 1), 0 === i.length && delete u[r]
            }
        };
    this.setLanguage = function(_) {
        if (this.reset(), _ = _.toLowerCase(), !this.supports(_)) throw "PramukhIndic.setLanguage(): language " + _ + " is not supported.";
        void 0 !== (i = e[_]).x_ && i.x_(), void 0 !== i.l_ && i.l_(), G()
    }, this.hasSettings = function() {
        return !0
    }, this.getSettings = function(_) {
        var a = i.f_,
            n = this.getKeyboardName();
        void 0 !== _ && "" !== _ || (_ = a);
        for (var M, r = [{
                language: "all",
                kb: n,
                digitInEnglish: t
            }], o = this.getLanguages(), u = o.length, s = e, m = 0; m < u; m++) M = o[m], o[m] !== _ && "all" !== _ || r.push({
            language: M,
            kb: n,
            advancedRule: s[M].__,
            advancedRuleValues: s[M].k_
        });
        return r
    }, this.setSettings = function(_) {
        if (!(_ instanceof Array)) throw "PramukhIndic.setSettings(): settings not a valid array";
        for (var a, n, M, r = e, o = i.$, u = !1, s = 0, m = _.length; s < m; s++)
            if (M = _[s], "all" === (a = M.language.toLowerCase())) void 0 !== M.digitInEnglish && (t = M.digitInEnglish || !1, u = !0);
            else {
                if (!this.supports(a)) throw "PramukhIndic.setSettings(): language '" + a + "' is not supported";
                (n = r[a]).k_.length > 0 && void 0 !== M.advancedRule && (n.__ = M.advancedRule, n.$ === o && (u = !0))
            }
        u && this.setLanguage(i.f_)
    }, this.canProcess = function() {
        return !0
    }, this.process = function(_, a, n) {
        if (a = !!a, n = !!n, _ < 32 || _ >= 127 || a || n) return this.reset(), {
            letterConsumed: !1,
            removeCharacters: 0,
            unicodeText: ""
        };
        var e = {},
            i = {},
            M = r,
            t = String.fromCharCode(_);
        return M.T(t), e = Z(), M.j(), (i = Y()).Found ? {
            letterConsumed: !0,
            removeCharacters: i.g,
            unicodeText: i.I
        } : e.Found ? {
            letterConsumed: !0,
            removeCharacters: e.g,
            unicodeText: e.I
        } : {
            letterConsumed: !1,
            removeCharacters: 0,
            unicodeText: ""
        }
    };
    var Y = function(_) {
            for (var a, e, i, M, t = r, o = t.s[0], u = t.P(), s = u.length, m = 0, h = 0, c = 0, d = 0, x = "", l = n, f = String.fromCharCode, k = 0, I = t.M, g = 0; g < s; g++)
                if (a = l[u[g]], m = s - g - 1, void 0 !== a && t.J(m))
                    for (i = 0, h = a.length; i < h; i++) {
                        if ((e = a[i]).s_.n_ <= -1) return !1;
                        if (o.N >= e.s_.n_ && o.N <= e.s_.i_ && o.C >= e.m_.n_ && o.C <= e.m_.i_) {
                            for (t.K(e.h_ - 1), M = 0, c = e.d_.length; M < c; M++)(k = e.d_[M]) <= 20 ? t.D(I[k].h) : t.D(f(k)), Z();
                            for (t.j(), d = I[0].g, e.h_ - 1 > 0 && (d = I[e.h_ - 1].I.length), M = e.h_ - 2; M > 0; M--) d = d - I[M].g + I[M].I.length;
                            return x = t.M[0].I, t.M[0].A = m, t.M[0].g = d, {
                                Found: !0,
                                g: d,
                                I: x
                            }
                        }
                    }
            return {
                Found: !1,
                g: 0,
                I: ""
            }
        },
        Z = function() {
            for (var _, n, e, t = r, o = t.s[0], u = t.V(), s = u.length, m = 0, h = 0, c = 0, d = "", x = i.I_, l = a, f = !1, k = 0, I = 0; I < s; I++)
                if (void 0 !== (_ = l[u[I]]) && (h = _.length, m = s - I - 1, e = t.H(m), t.F(m))) {
                    for (k = 0; k < h; k++) {
                        switch (n = _[k], c = 0, n.L) {
                            case 6:
                                d = n.o_, 6 === e.S.p ? (o.N = e.S.N, o.C = e.S.C + 1, x || (d = M + d)) : (o.N = e.S.N + 1, o.C = 1), x && (d += M), f = !0;
                                break;
                            case 2:
                                6 === e.S.p && (f = !0, d += n.o_, x && !e.S.R && (c += M.length, e.S.R = !0), o.N = e.S.N, o.C = e.S.C);
                                break;
                            case 4:
                                f = !0, d += n.o_, o.N = e.S.N + 1, o.C = 1;
                                break;
                            case 5:
                                6 === e.S.p && (f = !0, d += n.o_, x && (c += M.length, d += M), o.N = e.S.N, o.C = e.S.C);
                                break;
                            case 10:
                                4 !== e.S.p && 2 !== e.S.p || (f = !0, o.N = e.S.N, o.C = e.S.C);
                                break;
                            case 7:
                                f = !0, d += n.o_, o.N = 0, o.C = 0;
                                break;
                            case 8:
                                f = !0, d += n.o_, o.N = e.S.N + 1, o.C = 1;
                                break;
                            case 9:
                                switch (e.S.p) {
                                    case 6:
                                        o.N = e.S.N, o.C = e.S.C + 1;
                                        break;
                                    default:
                                        o.N = e.S.N + 1, o.C = 1
                                }
                                f = !0, d += n.o_;
                                break;
                            case 1:
                                f = !0, d += n.o_, o.N = e.S.N, o.C = e.S.C;
                                break;
                            default:
                                f = !0, d += n.o_, o.N = 0, o.C = 0
                        }
                        if (f) {
                            c += t.B(m), o.I = d, o.g = c, o.L = n.L, o.p = n.p, o.A = m;
                            break
                        }
                    }
                    if (f) break
                }
            if (!f) {
                var g = o.h.charCodeAt(0);
                (g >= 65 && g <= 90 || g >= 97 && g <= 122) && (o.I = "", o.N = o.S.N, o.C = o.S.C, f = !0)
            }
            return {
                Found: f,
                g: o.g,
                I: o.I
            }
        };
    this.reset = function() {
        r.U()
    };
    this.hasHelp = function() {
        return !0
    }, this.getHelp = function(_) {
        return _ || (_ = i.f_), _ = _.toLowerCase(), this.getKeyboardName() + "-" + _ + ".html"
    }, this.getHelpImage = function(_) {
        return _ || (_ = i.f_), _ = _.toLowerCase(), this.getKeyboardName() + "-" + _ + ".png"
    }, this.getKeyboardName = function() {
        return "pramukhindic"
    }, this.getLanguage = function() {
        return i.f_
    }, this.getLanguageCode = function(_) {
        var a;
        return _ || (a = i.f_), a = a.toLowerCase(), e[a].g_
    }, this.getLanguages = function() {
        return ["assamese", "bengali", "bodo", "dogri", "gujarati", "hindi", "kannada", "kashmiri", "konkani", "maithili", "malayalam", "manipuri", "marathi", "marathimodi", "meitei", "nepali", "odia", "punjabi", "sanskrit", "santali", "sindhi", "sora", "tamil", "telugu"]
    }, this.getVersion = function() {
        return "4.0.0"
    }, this.supports = function(_) {
        return void 0 !== e[_.toLowerCase()]
    }, this.resetSettings = function() {
        (e = {}).assamese = {
            f_: "assamese",
            $: 1,
            M_: 128,
            x_: w,
            l_: h,
            v_: !1,
            __: "",
            k_: [],
            I_: !1,
            b_: "o",
            g_: "AS"
        }, e.bengali = {
            f_: "bengali",
            $: 2,
            M_: 128,
            x_: w,
            l_: c,
            v_: !1,
            __: "",
            k_: [],
            I_: !1,
            b_: "o",
            g_: "BN"
        }, e.bodo = {
            f_: "bodo",
            $: 3,
            M_: 0,
            x_: w,
            l_: x,
            v_: !1,
            __: "",
            k_: [],
            I_: !1,
            b_: "o",
            g_: "BO"
        }, e.dogri = {
            f_: "dogri",
            $: 4,
            M_: 0,
            x_: w,
            l_: l,
            v_: !1,
            __: "",
            k_: [],
            I_: !1,
            b_: "a",
            g_: "DO"
        }, e.gujarati = {
            f_: "gujarati",
            $: 5,
            M_: 384,
            x_: w,
            l_: f,
            v_: !1,
            __: "",
            k_: [],
            I_: !1,
            b_: "a",
            g_: "GU"
        }, e.hindi = {
            f_: "hindi",
            $: 6,
            M_: 0,
            x_: w,
            l_: k,
            v_: !1,
            __: "anusvar",
            k_: ["panchamakshar", "anusvar"],
            I_: !1,
            b_: "a",
            g_: "HI"
        }, e.kannada = {
            f_: "kannada",
            $: 7,
            M_: 896,
            x_: w,
            l_: I,
            v_: !1,
            __: "anusvar",
            k_: ["panchamakshar", "anusvar"],
            I_: !0,
            b_: "a",
            g_: "KN"
        }, e.kashmiri = {
            f_: "kashmiri",
            $: 8,
            M_: 0,
            x_: w,
            l_: g,
            v_: !1,
            __: "anusvar",
            k_: ["panchamakshar", "anusvar"],
            I_: !1,
            b_: "a",
            g_: "KS"
        }, e.konkani = {
            f_: "konkani",
            $: 9,
            M_: 0,
            x_: w,
            l_: A,
            v_: !1,
            __: "",
            k_: [],
            I_: !1,
            b_: "a",
            g_: "KO"
        }, e.maithili = {
            f_: "maithili",
            $: 10,
            M_: 0,
            x_: w,
            l_: v,
            v_: !1,
            __: "",
            k_: [],
            I_: !1,
            b_: "a",
            g_: "MA"
        }, e.malayalam = {
            f_: "malayalam",
            $: 11,
            M_: 1024,
            x_: w,
            l_: b,
            v_: !1,
            __: "",
            k_: [],
            I_: !0,
            b_: "a",
            g_: "ML"
        }, e.manipuri = {
            f_: "manipuri",
            $: 12,
            M_: 128,
            x_: w,
            l_: d,
            v_: !1,
            __: "",
            k_: [],
            I_: !1,
            b_: "o",
            g_: "MN"
        }, e.marathi = {
            f_: "marathi",
            $: 13,
            M_: 0,
            x_: w,
            l_: L,
            v_: !1,
            __: "",
            k_: [],
            I_: !1,
            b_: "a",
            g_: "MR"
        }, e.marathimodi = {
            f_: "marathimodi",
            $: 14,
            M_: -4,
            x_: w,
            l_: p,
            v_: !0,
            __: "",
            k_: [],
            I_: !1,
            b_: "a",
            g_: "MR"
        }, e.meitei = {
            f_: "meitei",
            $: 15,
            M_: -1,
            x_: w,
            l_: R,
            v_: !1,
            __: "",
            k_: [],
            I_: !1,
            b_: "a",
            g_: "MT"
        }, e.nepali = {
            f_: "nepali",
            $: 16,
            M_: 0,
            x_: w,
            l_: N,
            v_: !1,
            __: "",
            k_: [],
            I_: !1,
            b_: "a",
            g_: "NE"
        }, e.odia = {
            f_: "odia",
            $: 17,
            M_: 512,
            x_: w,
            l_: C,
            v_: !1,
            __: "",
            k_: [],
            I_: !1,
            b_: "a",
            g_: "OD"
        }, e.punjabi = {
            f_: "punjabi",
            $: 18,
            M_: 256,
            x_: w,
            l_: S,
            v_: !1,
            __: "",
            k_: [],
            I_: !1,
            b_: "a",
            g_: "PA"
        }, e.sanskrit = {
            f_: "sanskrit",
            $: 19,
            M_: 0,
            x_: w,
            l_: U,
            v_: !1,
            __: "",
            k_: [],
            I_: !0,
            b_: "a",
            g_: "SA"
        }, e.santali = {
            f_: "santali",
            $: 20,
            M_: -2,
            x_: w,
            l_: D,
            v_: !1,
            __: "",
            k_: [],
            I_: !0,
            b_: "o",
            g_: "ST"
        }, e.sindhi = {
            f_: "sindhi",
            $: 21,
            M_: 0,
            x_: w,
            l_: T,
            v_: !1,
            __: "",
            k_: [],
            I_: !1,
            b_: "a",
            g_: "SD"
        }, e.sora = {
            f_: "sora",
            $: 22,
            M_: -3,
            x_: w,
            l_: j,
            v_: !0,
            __: "",
            k_: [],
            I_: !0,
            b_: "",
            g_: "SR"
        }, e.tamil = {
            f_: "tamil",
            $: 23,
            M_: 640,
            x_: w,
            l_: O,
            v_: !1,
            __: "",
            k_: [],
            I_: !0,
            b_: "a",
            g_: "TA"
        }, e.telugu = {
            f_: "telugu",
            $: 24,
            M_: 768,
            x_: w,
            l_: y,
            v_: !1,
            __: "",
            k_: [],
            I_: !0,
            b_: "a",
            g_: "TE"
        }, t = !1, this.setLanguage(i.f_)
    }, void 0 === _ && (_ = "hindi"), i.f_ = _, this.resetSettings()
}